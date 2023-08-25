<?php

namespace App\Controllers;

use App\Models\Order; //调用order控制的命令库php
use Symfony\Component\Routing\RouteCollection;

class DetailController
{
    // Show the product attributes based on the id.
    public function showOrder(string $id, RouteCollection $routes)
    {
        echo "hahaha!";
        //$order = new Order();
        // $id = (int)$cipher; //解密密文
        // $order->read($id); //查看用户订单的数据, 这里需要加上一个错误判断机制, 这是通过Models与数据库交互

        require_once APP_ROOT . '/views/detail.php';  //调用显示order数据的php
    }
}