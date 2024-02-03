let currentTab = 0;
showTab(currentTab);

//-------------------------------------------------------------------------------------//
//-----------------------------Basic operation of Forms -------------------------------//
//-------------------------------------------------------------------------------------//
//Show current form
function showTab(currentTab) {
    // This function will display the specified tab of the form ...
    let T = document.getElementsByClassName("orderTab");
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
    let i, steps = document.getElementsByClassName("step");
    for(i of steps)
        i.className = "step";

    for (i=0; i<=currentTab; i++)
        steps[i].className = "step active";
}
//next page
function nextPrev(n) {
    // This function will figure out which tab to display
    let T = document.getElementsByClassName("orderTab");

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
function requiredValidate() {
    let T, inputs, input;
    if(currentTab == 0){
        T = document.getElementsByClassName("orderTab");
        inputs = T[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (input of inputs){
            // 检查必选项
            if(input.validity.valueMissing && input.required) {
                input.setCustomValidity("该字段需要填写哟~");
                input.reportValidity();
                return false;
            }
        }
    }
    return true;
}
function ContactValidate() {
    let T = document.getElementsByClassName("orderTab");
    let inputs = T[currentTab].getElementsByTagName("input");
    let email = inputs[0], mobile = inputs[1];
    email.className = "";  mobile.className ="";

    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let mobilePattern = /^1[3456789]\d{9}$/;

    email.setCustomValidity("邮箱格式错误了, 请检查~");
    mobile.setCustomValidity("电话格式错误了, 再瞅瞅?")
    // 验证emial和mobile至少其一有合法输入
    if (email.value == "" && mobile.value == "") {
        email.className += "invalid"; email.reportValidity();
        mobile.className += "invalid"; mobile.reportValidity();
        return false;
    }
    if (email.value != "" && !email.value.match(emailPattern)) {
        email.className += "invalid"; email.reportValidity();
        return false;
    }
    if (mobile.value != "" && !mobile.value.match(mobilePattern)) {
        mobile.className += "invalid"; mobile.reportValidity();
        return false;
    }

    return true;
}

//-------------------------------------------------------------------------------------//
//------------------------------Supported Functions -----------------------------------//
//-------------------------------------------------------------------------------------//
function resetCurrent() {
    let x = document.getElementsByClassName(currentPage);
    let y = x[0].getElementsByTagName("input");
    for (let i = 0; i < y.length; i++) {
        y[i].value = y[i].defaultValue;
        if (y[i].type == 'radio') y[i].checked = false;
    }
}
