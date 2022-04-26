function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    let err3 = document.getElementById("err3");
    let err4 = document.getElementById("err4");

    let err5 = document.getElementById("err5");
    let err6 = document.getElementById("err6");

    let err7 = document.getElementById("err7");
    let err8 = document.getElementById("err8");

    let err9 = document.getElementById("err9");
    let err10 = document.getElementById("err10");

    let err11 = document.getElementById("err11");
    


   
   


    const firstname = pForm.fname.value;
    const lastname = pForm.lname.value;
    const gender = pForm.gender.value;
    const birthday = pForm.birthday.value;
    const religion = pForm.religion.value;
    const presentaddress = pForm.PresentAddress.value;
    const phone = pForm.Phone.value;
    const email= pForm.email.value;
    const username = pForm.username.value;
    const password = pForm.password.value;
    const confirmpassword = pForm.confirmpassword.value;
    
    
    

    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  Firstname cannot be empty";
        flag = false;
    }
    if (lastname === "") {
        err2.innerHTML = "  Lastname cannot be empty";
        flag = false;
    }
    if (gender === "") {
        err3.innerHTML = "  Select a gender ";
        flag = false;
    }
      if (birthday === "") {
        err4.innerHTML = "  birthday cannot be empty";
        flag = false;
    }
     if (religion == "") {
        err5.innerHTML = "  religion cannot be empty";
        flag = false;
    }if (presentaddress === "") {
        err6.innerHTML = "  presentaddress cannot be empty";
        flag = false;
    }
    if (phone=== "") {
        err7.innerHTML = "  phone cannot be empty";
        flag = false;
    }if (email === "") {
        err8.innerHTML = "  email cannot be empty";
        flag = false;
    }
     if (username === "") {
        err9.innerHTML = "  username cannot be empty";
        flag = false;
    }if (password === "") {
        err10.innerHTML = "  password cannot be empty";
        flag = false;
    }if (confirmpassword != password) {
        err11.innerHTML = "  password dont match";
        flag = false;
    }
    return flag;    


}