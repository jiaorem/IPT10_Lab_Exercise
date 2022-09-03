<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'MGnt7X0n96lKFbf3ORHp0NzKh50TWUyd',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "yabutmicoh",
  "password": "micohyabut1",
  "real_name": "Micoh Jomarie A. Yabut",
  "email": "yabut.micohjomarie@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
