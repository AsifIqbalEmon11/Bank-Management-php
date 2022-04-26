function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    let err3 = document.getElementById("err3");
    let err4 = document.getElementById("err4");

    let err5 = document.getElementById("err5");
    let err6 = document.getElementById("err6");


    const firstname = pForm.fname.value;
    const lastname = pForm.lname.value;
    const birthday = pForm.birthday.value;
    const presentaddress = pForm.PresentAddress.value;
    const phone = pForm.Phone.value;
    const email= pForm.email.value;
   
    
    
    

    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  Firstname cannot be empty";
        flag = false;
    }
    if (lastname === "") {
        err2.innerHTML = "  Lastname cannot be empty";
        flag = false;
    }
      if (birthday === "") {
        err3.innerHTML = "  birthday cannot be empty";
        flag = false;
    }
     if (presentaddress === "") {
        err4.innerHTML = "  presentaddress dont match";
        flag = false;
    }
    if (phone=== "") {
        err5.innerHTML = "  phone cannot be empty";
        flag = false;
    }if (email === "") {
        err6.innerHTML = "  email cannot be empty ";
        flag = false;
    }
    return flag;    
     

}