let emailInput1 = document.getElementById("email");
let passwordInput1 = document.getElementById("password");
let emailError1 = document.getElementById("emailErrorSignup");
let PasswordError1 = document.getElementById("passwordErrorSignup");
console.log(emailInput1);
console.log(passwordInput1);


function validateSignup(){
    var Submission = true;
    if(regex.test(emailInput.value) != true){
        emailErrorSignup.innerText="Enter College Email Id Only!";
        Submission = false;
    }
    if(passwordInput.value.length < 6){
        passwordErroSignup.innerText="Password length should greater than 6!";
        Submission = false;
    }
    return Submission;
}
