<?php
    require(dirname(dirname(__FILE__)).'/env.inc');

    /* メンバー情報を取得 */
    function getMemberList(){

        /* 送信する情報を作成 */
        $url = 'https://api.twitter.com/1.1/lists/members.json';
        $params = ['list_id' => '1220369673209827328','count' => '100'];
        $header = 'Authorization: Bearer '.TWITTER_API_KEY;
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
            return false;
        }

        /* 必要なデータのみを抜き出す */ 
        $userList = json_decode($response);
        $result = [];
        foreach($userList->users as $value){
            $result[] = [
                'name'  => $value->name,
                'image' => $value->profile_image_url ?: './assets/no_image.jpg',
                'url' => 'https://twitter.com/'.$value->screen_name,
            ];
        }
    
        return $result;
    }
