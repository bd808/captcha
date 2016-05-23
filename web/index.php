<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions
$app->get('/captcha-dev/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app['debug'] = true;
$app->run();
