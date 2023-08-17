let emailInput1 = document.getElementById("email");
let passwordInput1 = document.getElementById("password");
let passwordInput2 = document.getElementById("cpassword");
let emailError1 = document.getElementById("emailErrorSignup");
let PasswordError1 = document.getElementById("passwordErrorSignup");
let PasswordError2 = document.getElementById("cpasswordErrorSignup");



function validateSignup(){
    var Submission = true;
    if(regex.test(emailInput1.value) != true){
        emailError1.innerText="Enter College Email Id Only!";
        Submission = false;
    }
    if(passwordInput1.value.length < 6){
        passwordError1.innerText="Password length should greater than 6!";
        Submission = false;
    }

    if((passwordInput1.value) != (passwordInput2.value)){
        passwordError2.innerText="Password should match new Password!";
        Submission = false;
    }
    return Submission;
}
