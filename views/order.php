<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>起卦</title>
    <style>
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }
        input[type=radio]{
            margin-right: 20px;}
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            height: 100%;
            min-width: 300px;
        }
        /* Style the input fields */
        input {
            padding: 10px;
            width: auto;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }
        /* Hide all steps by default: */
        .base {
            display: none;
        }
        .work{
            display: none;
        }
        .study{
            display: none;
        }
        .marriage{
            display: none;
        }
        .naming{
            display: none;
        }
        .paying{
            display: none;
        }
        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }
        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            opacity: 0.8;
        }
        #prevBtn {
            background-color: #bbbbbb;
        }
    </style>
</head>
<!--主体页面-->
<body>
<header style="position: center">填写信息</header>
<section>
    <!--信息填写首表 order tab 0-->
    <div class="orderTab">
        <label>联系方式(选择其一即可)</label><br>
        <p><input placeholder="邮箱：1234@example.com" type="email" name="email"></p>
        <p><input placeholder="移动电话：" type="text" name="mobile"></p>
        <label for="description">测算类型:</label><br>
        <div style="display: inherit">
            <button type="button"  value="work" onclick="service('work')">事业/工作</button>
            <button type="button"  value="study" onclick="service('study')">学业</button>
            <button type="button"  value="marriage" onclick="service('marriage')">婚姻</button>
            <button type="button"  value="naming" onclick="service('naming')">起名</button>
        </div>
    </div>
    <form id="regForm" method="post">
        <?php require_once APP_ROOT . '/views/detail_forms/order_base.php';?>
    </form>

    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">返回首页</a>

</section>
<!--这个js是用来控制填写表单, 以及验证其合法性-->
<script>
    <?php require_once APP_ROOT . '/views/JavaScript/order.js'?>
</script>
</body>

</html>