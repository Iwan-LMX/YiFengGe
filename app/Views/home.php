<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>易风阁</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #2196F3;
            padding: 10px;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            pointer-events: auto;
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
        a {


            text-decoration: none;
            color: initial;
        }

    </style>
</head>

<body>

<section>
    <h1 align="center">
<!--        <a href="--><?php //echo $routeToOrder ?><!--">Check the first product</a>-->
        —— 星垂平野阔，月涌大江流 ——
    </h1>

    <div class="grid-container">
        <button class="grid-item" onclick="window.location.href='./order/work'" type="button">事业</button>
        <button class="grid-item" onclick="window.location.href='./order/study'" type="button">学业</button>
        <button class="grid-item" onclick="window.location.href='./order/marriage'" type="button">婚姻</button>
        <button class="grid-item" onclick="window.location.href='./order/naming'" type="button">取名</button>
    </div>

<!--    <form method="post">-->
<!--        <label for="ciper">查看订单: </label>-->
<!--        <input type="text" name="cipher" id="ciper" style="width: 200pt" placeholder="输入订单密文:'xxxx-xxxx-xxxx-xxxx'">-->
<!--        <input type="submit" value="提交">-->
<!--    </form>-->
<!--    <br>-->
</section>

</body>

</html>