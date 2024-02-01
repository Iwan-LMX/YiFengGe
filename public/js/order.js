var currentTab = 0;
showTab(currentTab);

//-------------------------------------------------------------------------------------//
//-----------------------------Basic operation of Forms -------------------------------//
//-------------------------------------------------------------------------------------//
//Show current form
function showTab(currentTab) {
    // This function will display the specified tab of the form ...
    var T = document.getElementsByClassName("orderTab");
    T[currentTab].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (currentTab == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (currentTab == (T.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(currentTab)
}
//Show current form steps
function fixStepIndicator(currentTab) {
    // This function removes the "active" class of all steps...
    var i, steps = document.getElementsByClassName("step");
    for(i of steps)
        i.className = "step";

    for (i=0; i<=currentTab; i++)
        steps[i].className = "step active";
}
//next page
function nextPrev(n) {
    // This function will figure out which tab to display
    var T = document.getElementsByClassName("orderTab");

    // Next or Submit must be validated
    if (n==1 && currentTab == T.length-1) {
        //Check contact before Submit the form
        if(!ContactValidate()) return false;
        document.getElementById("regForm").submit();

        // next is payment process
        return true;
    }
    if (n==1 && !requiredValidate()) return false;
    // Hide the current tab:
    T[currentTab].style.display = "none";

    // Increase or decrease the current tab by 1, show new tab:
    currentTab = currentTab + n;
    showTab(currentTab);
}

//-------------------------------------------------------------------------------------//
//---------------------------Below for the Form validation ----------------------------//
//-------------------------------------------------------------------------------------//

function ContactValidate() {
    var T = document.getElementsByClassName("orderTab");
    var inputs = T[currentTab].getElementsByTagName("input");
    for(i of inputs)
        i.className = "";
    // 验证emial和mobile至少其一有合法输入
    if (inputs[0].value == "" && inputs[1].value == "") {
        inputs[0].className += "invalid";
        inputs[1].className += "invalid";
        return false;
    } else if (inputs[1].value == "") {
        var email = document.getElementsByName("email");
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email[0].value.match(pattern)) {
            inputs[0].className += "invalid";
            return false;
        }
    } else if (inputs[0].value == "") {
        var mobile = document.getElementsByName("mobile");
        var pattern = /^1[3456789]\d{9}$/;
        if (!mobile[0].value.match(pattern)) {
            inputs[1].className += "invalid";
            return false;
        }
    }
    return true;
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




function showDOB_MW() {
    var y1 = document.getElementsByName("DOB_M")[0];
    var y2 = document.getElementsByName("DOB_W")[0];
    if (y1.value == "" && y2.value == "") {
        y1.dispatchEvent(new Event("invalid"));
        y1.reportValidity();
        return false
    } else return true;
}


//-------------------------------------------------------------------------------------//
//------------------------------Supported Functions -----------------------------------//
//-------------------------------------------------------------------------------------//
function resetCurrent() {
    var x = document.getElementsByClassName(currentPage);
    var y = x[0].getElementsByTagName("input");
    for (var i = 0; i < y.length; i++) {
        y[i].value = y[i].defaultValue;
        if (y[i].type == 'radio') y[i].checked = false;
    }
}
