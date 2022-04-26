function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
  

    const firstname = pForm.sname.value;


    let flag = true;

    if (firstname==="") {
        err1.innerHTML = "  User name cannot be empty";
        flag = false;
    }

    const actionURL = pForm.action;
    const actionMethod = pForm.method;

    let xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("msg").innerHTML = this.responseText;
    }
    xhttp.open(actionMethod, actionURL);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("sname=" + firstname); 

}