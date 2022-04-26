function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    let err3 = document.getElementById("err3");
    let err4 = document.getElementById("err4");

    let err5 = document.getElementById("err5");
    let err6 = document.getElementById("err6");


    const firstname = pForm.opassword.value;
    const lastname = pForm.password.value;
    const birthday = pForm.cpassword.value;
    
    
    
    

    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  Please put the old password";
        flag = false;
    }
    if (lastname === "") {
        err2.innerHTML = "  Please put a new password";
        flag = false;
    }
      if (birthday != lastname ) {
        err3.innerHTML = "  password dont match";
        flag = false;
    }
    return flag;    
        

}