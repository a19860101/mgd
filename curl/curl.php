<?php
        $url = "https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=5";
        $c = curl_init($url);
        curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($c);
        echo $result;
    ?>