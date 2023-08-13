let emailInput = document.getElementById("loginemail");
let passwordInput = document.getElementById("loginpassword");
let signInBtn = document.getElementById("signIn");
let emailError = document.getElementById("emailError");
let PasswordError = document.getElementById("passwordError");
console.log(signInBtn);
console.log(emailInput);
console.log(passwordInput);
let regex = /^[r]{1}[0-9]{6}@[a-z]+\.[a-z]{2}\.[a-z]{2}$/;

function validateLogin(){
    var submission = true;
    if(regex.test(emailInput.value) != true){
        emailError.innerText="Enter College Email Id Only!";
        submission = false;
    }
    if(passwordInput.value.length < 6){
        passwordError.innerText="Password length should greater than 6!";
        submission = false;
    }
    return submission;
}
