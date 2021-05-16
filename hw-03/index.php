<?php
    include 'vendor/autoload.php';
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://itea.ua');
    echo $response->getBody();

    $bigText = new \caps\Caps();
    echo $bigText-> makeCaps('Text for example') . PHP_EOL;
?>clear