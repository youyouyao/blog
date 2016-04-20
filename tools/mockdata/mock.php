<?php

    /*
     * 功能：开发者通过模拟json数据格式，通过访问mock.php?file=filename&callback=callbackname，获取到jsonp格式的数据。
     * */

    header("Content-Type: text/javascript; charset=utf-8");

    // $dataurl = "https://raw.githubusercontent.com/youyouyao/blog/master/tools/mockdata/".$_GET['file'].".json";
    $dataurl = $_GET['file'].".json";

    $fileData = file_get_contents($dataurl);

    echo sprintf('%s(%s);',$_GET['callback'], $fileData);
?>
