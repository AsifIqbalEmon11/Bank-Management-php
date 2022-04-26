function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");


    const firstname = pForm.password.value;
    const lastname = pForm.cpassword.value;
    
    
    
    
    

    let flag = true;

    if (firstname==="") {
        err1.innerHTML = " password can not be empty";
        flag = false;
    }
    if (lastname != firstname) {
        err2.innerHTML = "  password dont match";
        flag = false;
    } 
    return flag;           

}