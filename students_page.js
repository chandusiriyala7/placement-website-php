var mode = document.getElementById("mode");
mode.addEventListener("click",function(){
    if(mode.innerText == "LightMode"){
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
        mode.innerText = "NightMode";
    }
    else if(mode.innerText == "NightMode"){
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        mode.innerText = "LightMode";
    }
});

let idEl = document.getElementById('id');
let fullnameEl = document.getElementById('fullname');
let emailEl = document.getElementById('email');
let numberEl = document.getElementById('number');
let idError = document.getElementById('idError');
let emailError = document.getElementById('emailError');
let nameError = document.getElementById('nameError');
let numberError = document.getElementById('numberError')
let applicationSuccess =document.getElementById('applicationSuccess');
let emailRegex = /^[r]{1}[0-9]{6}@[a-z]+\.[a-z]{2}\.[a-z]{2}$/;
let idRegex = /^[rR]{1}[0-9]{6}$/;
let numberRegex = /^[6-9]{1}[0-9]{9}$/
let submission =true;

function validateApplication(){
    if((idRegex.test(idEl.value)) != true){
        idError.innerText = "Enter Valid ID only!";
        submission = false;
    }
    if(fullnameEl.value.length < 6){
        nameError.innerText = "name length should greater than 6";
        submission = false;
    }
    if(emailRegex.test(emailEl.value) != true){
        emailError.innerText = "Enter Valid mail ID only!";
        submission = false;
    }
    if(numberRegex.test(numberEl.value) != true){
        numberError.innerText = "Enter Valid  Number only!";
        submission = false;
    }

    return submission;
    
}

let git = document.getElementById('git');
let insta = document.getElementById('insta'); 
let youtube = document.getElementById('youtube');

git.addEventListener("mouseenter",function(){
    window.location ="https://github.com/chandusiriyala7";
})

insta.addEventListener("mouseleave",function(){
    window.location ="https://www.instagram.com/chandusiriyala/";
})

youtube.addEventListener("mouseover",function(){
    window.location ="https://www.youtube.com/@chandusiriyala";
})