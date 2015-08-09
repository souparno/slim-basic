<?php

require __DIR__ . '/vendor/autoload.php';

use Slim\Slim as Slim;

$app = new Slim();
$app->get('/hello/:name', function ($name) use($app){

    $app->render("hello.php",array(
      'notify' =>  "Hello, $name"
    ));
});

$app->run();
