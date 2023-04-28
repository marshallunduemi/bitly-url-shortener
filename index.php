<?php

function bitlinks($long_url)
{
// code...
$url = 'https://api-ssl.bitly.com/v4/bitlinks';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['long_url' => $long_url]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer d50d00d7910b93bcf253e6a11096ebb4eb77a22d",
    "Content-Type: application/json"
]);
  
$arr_result = json_decode(curl_exec($ch));
return $arr_result->link;
}

// call function
$long_url = "https://codexpress.info/developer";
  
echo bitlinks($long_url);
