<?php

// require __DIR__ . '/../../vendor/autoload.php';
// require __DIR__ . '/../../bootstrap/app.php';

require __DIR__ . '/../../ibrahim/vendor/autoload.php'; //live server
require __DIR__ . '/../../ibrahim/bootstrap/app.php'; //live server

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
