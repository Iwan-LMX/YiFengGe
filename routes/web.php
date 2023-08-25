<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
//page for ordering a service & controller for create and watch service's status
$routes->add('showOrder', new Route(constant('URL_SUBFOLDER') . '/detail/{id}', array('controller' => 'DetailController', 'method'=>'showOrder'), array('id' => '[0-9]+')));
$routes->add('makeOrder', new Route(constant('URL_SUBFOLDER') . '/order', array('controller' => 'OrderController', 'method'=>'makeOrder'), array()));

//home page
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

