<?php
    include 'vendor/autoload.php';
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://itea.ua');
    echo $response->getBody();
?>