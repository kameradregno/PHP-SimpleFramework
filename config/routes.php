<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

// routing alamat url web

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello', ['_controller' => 
'ModernFramework\Controller\HelloController::hello',]));

$routes->add('greeting', new Route('/greeting/{nama}', ['nama' => 'Surya',
'_controller' => 'ModernFramework\Controller\HelloController::greet',]));
    
$routes->add('landing', new Route('/{nama}', ['nama' => 'Regno',
'_controller' => 'ModernFramework\Controller\HelloController::landing',]));
