<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('order', new Route(constant('URL_SUBFOLDER') . '/order/{id}', array('controller' => 'OrderController', 'method'=>'showAction'), array('id' => '[0-9]+')));

//home page
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));