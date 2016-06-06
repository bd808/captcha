<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions
$app->get('/', function () {
    return 'Hello!';
});

$app->post('/generate/', function () {
    return 'Hello, this is the (future) generator!';
});

$app->get('/verify/', function () use ($app) {
    return $app->json(array('match' => rand(0,1) == 1));
});

$app->get('/version/', function () use ($app) {
    return $app->json(array('hash' => exec('git log --pretty="%H" -n1 HEAD')));
});

$app['debug'] = true;
$app->run();