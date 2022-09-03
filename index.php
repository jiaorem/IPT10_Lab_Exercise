<?php

include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

define('TOKEN', 'MGnt7X0n96lKFbf3ORHp0NzKh50TWUyd');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$client = new Client();
$headers = [
  'Authorization' => TOKEN
];
$request = new Request('GET', MANTISHUB_URL . 'api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();


$bugs_list = json_decode($bugs);

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IP10 Bugs</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<body>

<div class="container-xl">
    <div class="table">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>IPT10 Bugs List</h2></div>
                </div>
            </div>
                    <div><a href='#'>YABUT, MICOH JOMARIE A.<a></div>


<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Summary</th>
      <th scope="col">Severity</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($bugs_list->issues as $bug):
    ?>
    <tr>
      <td><?=$bug->id;?></td>
      <td><?=$bug->summary;?></td>
      <td><?=$bug->severity->name;?></td>
      <td><?=$bug->status->name;?></td>
    </tr>
     <?php endforeach; ?>
  </tbody>
</table>
</div></div></div>
</body>

</head>
</html>
