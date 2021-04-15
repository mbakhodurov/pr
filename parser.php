<?php
//openweathermap.org/data/2.5/weather?q=London&appid
    $url = 'http://api.openweathermap.org/data/2.5/weather';
    $options=array(
        'q' => 'Kazan',
        'APPID' => '10a0e0fa6060038947c98d81cfcbf2d6',
        'unit' => 'metric',
        'lang' => 'ru',
    );
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_URL,$url.'?'.http_build_query($options));

    $response=curl_exec($ch);
    $data=json_decode($response,true);
    curl_close($ch);

    echo "<pre>";
    print_r($data);


?>