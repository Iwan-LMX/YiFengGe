<?php

//site name
define('SITE_NAME', 'yifengge.com');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '3459');
define('DB_NAME', 'yifengge');

// 创建连接
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 检测连接
if ($conn->connect_error) {
    die("未接入数据库，请等待管理员维护 " . $conn->connect_error);
}