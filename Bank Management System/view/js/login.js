function validateAndSubmit(pForm) {

    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");

    err1.innerHTML = "";
    err2.innerHTML = "";

    const username = pForm.username.value;
    const password = pForm.password.value;

    let flag = true;

    if (username == "") {
        err1.innerHTML = "username cannot be empty";
        flag = false;
    }
    if (password == "") {
        err2.innerHTML = "password cannot be empty";
        flag = false;
    }

return flag;
       
}