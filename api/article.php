<?php
    require(dirname(dirname(__FILE__)).'/unit/common.php');
    header('Content-type:application/json; charset=utf8');
    echo json_encode(getArticleList());
