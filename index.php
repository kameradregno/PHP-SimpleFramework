<?php

// mini controller

// if ('/sapa' === $_SERVER['REQUEST_URI']) {
//     require 'hello.php';
//     }
//     if (false !== strpos($_SERVER['REQUEST_URI'], '/greeting'))
//     {
//     require 'greeting.php';
//     }
    
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use ModernFramework\Application;


$request = Request::createFromGlobals();
$kernel = new Application();
$response = $kernel->handle($request);
$response->send();

