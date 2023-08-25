var currentPage = "base", secondPage, single=0, gender=0; // Current tab is set to be the first tab
showTab(currentPage); // Display the current tab

function showTab(tab) {
    // This function will display the specified tab of the form ...
    var T = document.getElementsByClassName(tab);
    T[0].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (tab == "paying") {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    document.getElementById("nextBtn").style.display = "block";
    if (tab == "base") {
        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "block";
    }
}

function setSingle(value) {
    single = value;
    if(gender != 0) setGender(0);
}
function setGender(value){
    if(value != 0) gender = value;
    document.getElementsByName("DOB_M")[0].disabled = false;
    document.getElementsByName("DOB_W")[0].disabled = false;
    if (single == 1)
        if(gender == 1){
            //男性
            document.getElementsByName("DOB_W")[0].disabled = true;
        }else{
            document.getElementsByName("DOB_M")[0].disabled = true;
        }
}
function service(tab) {
    // Exit the function if any field in the current tab is invalid:
    if (!validateForm()) return false;
    document.getElementById("regForm").elements["kind"].value = tab;
    var T = document.getElementsByClassName(currentPage);
    T[0].style.display = "none";
    secondPage = currentPage = tab;
    showTab(currentPage);
}

function nextPrev(n) {
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    var T = document.getElementsByClassName(currentPage);
    T[0].style.display = "none";
    if (n == 1 && currentPage == "paying") {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    } else if (n == 1 && currentPage != "paying")
        currentPage = "paying";
    else if (currentPage != "paying") {
        // reset current page
        resetCurrent()
        currentPage = "base";
    } else {
        // reset current page
        resetCurrent()
        currentPage = secondPage;
    }
    showTab(currentPage);
}

function resetCurrent() {
    var x = document.getElementsByClassName(currentPage);
    var y = x[0].getElementsByTagName("input");
    for (var i = 0; i < y.length; i++) {
        y[i].value = y[i].defaultValue;
        if (y[i].type == 'radio') y[i].checked = false;
    }
}

function validateForm() {
    var x, y, i, valid = true;
    if (currentPage == "base") valid = baseValidate();
    else {
        x = document.getElementsByClassName(currentPage);
        y = x[0].getElementsByTagName("input");//如果用type来分类进行检查应该也可以?
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // 检查必选项
            if (!y[i].reportValidity()) valid = false;

            // if (y[i].name == "gender" && y[i].reportValidity())  valid = false;
            // else if (y[i].name == "yao" && y[i].reportValidity()) valid = false;
            // else if (y[i].name == "single" && y[i].reportValidity()) valid = false;
            // else if ((y[i].name == "DOB_M" || y[i].name == "DOB_W") && !validateDOB_WM(x)) valid = false;
            // else if (y[i].name == "person" && y[i].reportValidity()) valid = false;
            // else if (y[i].name == "channel" && y[i].reportValidity()) valid = false;
            // else if (y[i].name != "question" && y[i].value == "") {
            //     y[i].className += "invalid";
            //     valid = false
            // }
        }
    }
    return valid;
}

function showDOB_MW() {
    var y1 = document.getElementsByName("DOB_M")[0];
    var y2 = document.getElementsByName("DOB_W")[0];
    if (y1.value == "" && y2.value == "") {
        y1.dispatchEvent(new Event("invalid"));
        y1.reportValidity();
        return false
    } else return true;
}

function baseValidate() {
    var x = document.getElementsByClassName(currentPage);
    y = x[0].getElementsByTagName("input");
    // 验证emial和mobile至少其一有合法输入
    if (y[0].value == "" && y[1].value == "") {
        y[0].className += "invalid";
        y[1].className += "invalid";
        return false;
    } else if (y[1].value == "") {
        var email = document.getElementsByName("email");
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email[0].value.match(pattern)) {
            y[0].className += "invalid";
            return false;
        }
    } else if (y[0].value == "") {
        var mobile = document.getElementsByName("mobile");
        var pattern = /^1[3456789]\d{9}$/;
        if (!mobile[0].value.match(pattern)) {
            y[1].className += "invalid";
            return false;
        }
    }
    return true;
    }


