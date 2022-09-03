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
  "text": "yabut.micohjomarie@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/11/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
