<?php

namespace App\Controllers;

use App\Models\Order;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
//        $routeToOrder = (string) $routes->get('showOrder')->getPath();
        require_once APP_ROOT . '/app/Views/home.php';


        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $cipher = $_POST['cipher'];
            header("Location: ./detail/{$cipher}");
        }
    }

}