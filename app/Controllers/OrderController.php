<?php

namespace App\Controllers;

use App\Models\Order; //调用order控制的命令库php
use mysql_xdevapi\Warning;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class OrderController
{
    public function workOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/work.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }

    }
    public function studyOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/study.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }

    }
    public function marriageOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/marriage.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }

    }
    public function namingOrder(RouteCollection $routes){
        require_once APP_ROOT . 'app/Views/detail_forms/naming.html';
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