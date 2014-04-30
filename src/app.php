<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = null;
/*
switch (getenv('PHP_ENV')) {
    case 'heroku':
        $app = require __DIR__ . '/bootstrap.heroku.php';
        break;
    default:
        $app = require __DIR__ . '/bootstrap.local.php';
        break;
}
*/
$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/../views',
    'twig.options' => [
        'debug' => true,
    ]
]);

Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride();

$app->get('/', function() use ($app) {
   return $app['twig']->render('index.html');
});

return $app;
