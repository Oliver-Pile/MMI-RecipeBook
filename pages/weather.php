<?php
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
  $dotenv->load();

  $ch = curl_init();
  $location = 'Ipswich,UK';
  $apikey = $_ENV['WEATHER_API_KEY'];

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q='.$location.'&appid='.$apikey);
  $output = curl_exec($ch);
  curl_close($ch);

  $output = json_decode($output, true);

  echo "<p>The weather in ".$location." is " . $output['weather'][0]['main']. "</p>";
?>