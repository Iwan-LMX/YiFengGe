<?php

namespace App\Controllers;

use App\Models\Order; //调用order控制的命令库php
use mysql_xdevapi\Warning;
use Symfony\Component\Routing\RouteCollection;

class OrderController
{
    public function makeOrder(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/order.php';  //调用显示order数据的php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }
    }
    private function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}