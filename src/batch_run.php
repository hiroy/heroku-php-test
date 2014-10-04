<?php
$app = require __DIR__ . '/app.php';

list($_, $method, $path) = $argv; // $ php src/batch_run.php GET /batch/update_...
$request = Symfony\Component\HttpFoundation\Request::create($path, $method);

$app->run($request);
