function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
  

    const firstname = pForm.uname.value;


    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  User name cannot be empty";
        flag = false;
    }
     return flag;    
}