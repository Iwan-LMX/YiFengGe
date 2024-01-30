<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
//page for ordering a service & controller for create and watch service's status
$routes->add('showOrder', new Route(constant('URL_SUBFOLDER') . '/detail/{id}', array('controller' => 'DetailController', 'method'=>'showOrder'), array('id' => '[0-9]+')));
$routes->add('workOrder', new Route(constant('URL_SUBFOLDER') . '/order/work', array('controller' => 'OrderController', 'method'=>'workOrder'), array()));
$routes->add('studyOrder', new Route(constant('URL_SUBFOLDER') . '/order/study', array('controller' => 'OrderController', 'method'=>'studyOrder'), array()));
$routes->add('marriageOrder', new Route(constant('URL_SUBFOLDER') . '/order/marriage', array('controller' => 'OrderController', 'method'=>'marriageOrder'), array()));
$routes->add('namingOrder', new Route(constant('URL_SUBFOLDER') . '/order/naming', array('controller' => 'OrderController', 'method'=>'namingOrder'), array()));


//home page
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

