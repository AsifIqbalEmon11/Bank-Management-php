function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    let err3 = document.getElementById("err3");
    let err4 = document.getElementById("err4");


    const firstname = pForm.ad.value;
    const lastname = pForm.interest.value;
    const birthday = pForm.time.value;
    const presentaddress = pForm.description.value;
    
   
    
    
    

    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  Ad name cannot be empty";
        flag = false;
    }
    if (lastname === "") {
        err2.innerHTML = "  interest cannot be empty";
        flag = false;
    }
      if (birthday === "") {
        err3.innerHTML = "  time duration cannot be empty";
        flag = false;
    }
     if (presentaddress === "") {
        err4.innerHTML = " description cannot be empty";
        flag = false;
    }
    return flag;    
 
     

}