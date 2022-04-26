function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");


    const firstname = pForm.email.value;
    const lastname = pForm.Phone.value;
    
    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  email can not be empty";
        flag = false;
    }
    if (lastname === "") {
        err2.innerHTML = "  number can not be empty";
        flag = false;
    } 
    return flag;       

}