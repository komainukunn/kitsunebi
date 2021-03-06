<?php
    /* 環境パスの設定 */
    if(empty(getenv('PHP_TEST'))){
        require(dirname(dirname(__FILE__)).'/config.inc');
    }

    /* メンバー情報を取得 */
    function getMemberList(){

        /* 送信する情報を作成 */
        $url = 'https://api.twitter.com/1.1/lists/members.json';
        $params = ['list_id' => '1220369673209827328','count' => '100'];
        $header = 'Authorization: Bearer '.getenv('TWITTER_API_KEY');
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $url . '?' . http_build_query($params, '', '&'),
            CURLOPT_HTTPHEADER     => [$header],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => 'gzip',
        ]);
    
        /* リクエストを実行 */
        $response = curl_exec($ch);
        
    
        /* エラーの場合 falseを返す */
        if (curl_errno($ch)) {
            return [];
        }

        /* 必要なデータのみを抜き出す */ 
        $userList = json_decode($response);
        $result = [];
        foreach((array)$userList->users as $value){
            $result[] = [
                'name'  => $value->name,
                'image' => !empty($value->profile_image_url_https) ? str_replace('_normal','',$value->profile_image_url_https) : './assets/no_image.jpg',
                'url' => 'https://twitter.com/'.$value->screen_name,
                'id' => $value->screen_name, 
            ];
        }
    
        return getCacheContents($result,dirname(dirname(__FILE__)).'/chache/member.json');
    }

    /* 記事情報を取得 */
    function getArticleList(){
        
        //メンバー情報取得
        $members = array_column (getMemberList(),"id");

        /* 送信する情報を作成 */
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $params = [
            'q' => '#きつねび -RT',
            'lang' => 'ja',
            'result_type' => 'recent',
            'count' => '50',
        ];
        $header = 'Authorization: Bearer '.getenv('TWITTER_API_KEY');
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $url . '?' . http_build_query($params, '', '&'),
            CURLOPT_HTTPHEADER     => [$header],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => 'gzip',
        ]);
    
        /* リクエストを実行 */
        $response = curl_exec($ch);
        //return json_decode($response);

        /* エラーの場合 falseを返す */
        if (curl_errno($ch)) {
            return [];
        }

        /* 必要なデータのみを抜き出す */ 
        $articleList = json_decode($response);
        $result = [];
        foreach((array)$articleList->statuses as $value){
            if(!in_array($value->user->screen_name, $members)){
                continue;
            }
            $url = "https://twitter.com/".$value->user->screen_name."/status/".$value->id;
            $result[] = getTweetElement($url);
        }
    
       return getCacheContents($result,dirname(dirname(__FILE__)).'/chache/article.json');
    }

    function getTweetElement($tweet){
        /* 送信する情報を作成 */
        $url = 'https://publish.twitter.com/oembed';
        $params = [
            'url' => $tweet,
        ];
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $url . '?' . http_build_query($params, '', '&'),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => 'gzip',
        ]);

        /* リクエストを実行 */
        $response = curl_exec($ch);

        /* エラーの場合 falseを返す */
        if (curl_errno($ch)) {
            return [];
        }
        
        return json_decode($response);

    }

    //APIのキャッシュを作成
    function getCacheContents($arr, $cachePath, $cacheLimit = 86400) {

        if(!file_exists(dirname($cachePath))){
            mkdir(dirname($cachePath), 0777);
            chmod(dirname($cachePath), 0777);
        }

        //もし配列が空だったら、キャッシュからjsonを取得
        if(empty($arr)){
            $tmp = file_get_contents($cachePath);
            $arr =  json_decode($tmp);

        //空じゃない場合はキャッシュ時間を過ぎている場合はキャッシュ更新
        }else{
            if(!file_exists($cachePath) || filemtime($cachePath) + $cacheLimit < time()){
                $tmp = json_encode($arr);
                file_put_contents($cachePath, $tmp, LOCK_EX); // キャッシュに保存
            }
        }
        //配列を返す
        return $arr;
    }
