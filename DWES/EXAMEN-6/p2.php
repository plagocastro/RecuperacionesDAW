<?php
$lat = 1; 
$lon = -1; 
$api_key = 'b5cfc4f029fcb3b35ddb5569055ff2a4'; 

$api_url_today = "https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&units=metric&exclude=minutely,hourly&appid=$api_key";
$ch_today = curl_init();
curl_setopt($ch_today, CURLOPT_URL, $api_url_today);
curl_setopt($ch_today, CURLOPT_RETURNTRANSFER, true);
$response_today = curl_exec($ch_today);
curl_close($ch_today);
$weather_data_today = json_decode($response_today, true);

$api_url_july_15 = "https://api.openweathermap.org/data/2.5/onecall/timemachine?lat=$lat&lon=$lon&dt=1626345600&units=metric&appid=$api_key";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url_july_15);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_july_15 = curl_exec($ch);
curl_close($ch);
$weather_data_july_15 = json_decode($response_july_15, true);
?>

