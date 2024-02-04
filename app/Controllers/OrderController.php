<?php

namespace App\Controllers;
use App\Models\orderModels\Marriage;
use App\Models\orderModels\Naming;
use App\Models\orderModels\Study;
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

            $order = new Work();
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
            //Should check if complete payment!

            $order = new Study();
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
    public function marriageOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/marriage.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Should check if complete payment!

            $order = new Marriage();
            //table1 Base form
            $order->setSingle($this->test_input($_POST["single"]));
            $order->setGender($this->test_input($_POST["gender"]));
            if(isset($_POST["DOB_M"]))
                $order->setDOBM(date("Y-m-d H:i:s", strtotime($this->test_input($_POST["DOB_M"]))));
            if(isset($_POST["DOB_W"]))
                $order->setDOBW(date("Y-m-d H:i:s", strtotime($this->test_input($_POST["DOB_W"]))));
            $order->setYao($this->test_input($_POST["yao"]));
            $order->setQuestion($this->test_input($_POST["question"]));
            //table2 Contact method
            $order->setEmail($this->test_input($_POST["email"]));
            $order->setMobile($this->test_input($_POST["mobile"]));

            //Put into db
            $order->childCreat();
        }

    }
    public function namingOrder(RouteCollection $routes){
        require_once APP_ROOT . '/app/Views/detail_forms/naming.html';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Should check if complete payment!

            $order = new Naming();
            //table1 Base form
            $order->setPerson($this->test_input($_POST["person"]));
            $order->setDOB(date("Y-m-d H:i:s", strtotime($this->test_input($_POST["DOB"]))));
            $order->setSurname($this->test_input($_POST["surname"]));
            $order->setQuestion($this->test_input($_POST["question"]));
            //table2 Contact method
            $order->setEmail($this->test_input($_POST["email"]));
            $order->setMobile($this->test_input($_POST["mobile"]));

            //Put into db
            $order->childCreat();
        }

    }
    private function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}