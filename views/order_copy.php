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
            display: block;
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
    <form id="regForm">
        <?php include APP_ROOT . '/views/detail_forms/order_base.php';?>
    </form>


    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">返回首页</a>

</section>

<!--这个js是用来控制填写表单, 以及验证其合法性-->
<script>
var currentPage = "base"; // Current tab is set to be the first tab
showTab(currentPage); // Display the current tab
function showTab(tab) {
    // This function will display the specified tab of the form ...
    var T = document.getElementsByClassName(tab);
    T[0].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (tab == "base") {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "none";
    }
    if (tab == "paying") {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(tab)
}

function nextPrev(n) {
    //get service that user selected
    var radios = document.getElementsByName("description");
    for (int i=0; i<radios.length; i++){
        if(radios[i].checked){
            var selected = radios[i].value.toString();
            var T = document.getElementsByClassName(selected);
            T[0].style.display = "block";
        }
    }

    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(tab) {
    // This function removes the "active" class of all steps...
    var current=1, x = document.getElementsByClassName("step");
    if(tab=="base") current = 0;
    else if(tab == "paying") current = 2;
    for (var i = 0; i < current; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[current].className += " active";
}
</script>
</body>

</html>