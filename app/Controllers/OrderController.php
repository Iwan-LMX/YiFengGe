<?php

namespace App\Controllers;
use mysql_xdevapi\Warning;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
//调用order控制的命令库php
use App\Models\Order;
use App\Models\orderModels\Work;


class OrderController
{
    public function workOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/work.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Should check if complete payment!

            $order = new work();
            //table1 Base form
            $order->setDOB(date("Y-m-d H:i:s", strtotime($this->test_input($_POST["DOB"]))));
            $order->setGender($this->test_input($_POST["gender"]));
            $order->setPosition($this->test_input($_POST["position"]));
            $order->setYao($this->test_input($_POST["yao"]));
            $order->setQuestion($this->test_input($_POST["question"]));
            //table2 Contact method
            $order->setEmail($this->test_input($_POST["email"]));
            $order->setMobile($this->test_input($_POST["mobile"]));

            //Put into db
            $order->childCreat();
        }

    }
    public function studyOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/study.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //table1 Base form


            //table2 Contact method
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }

    }
    public function marriageOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/marriage.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //table1 Base form


            //table2 Contact method
            $email  = $this->test_input($_POST["email"]);
            $mobile  = $this->test_input($_POST["mobile"]);
        }

    }
    public function namingOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/naming.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //table1 Base form


            //table2 Contact method
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