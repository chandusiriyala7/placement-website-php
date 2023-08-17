<?php
session_start();
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="forgotPassword.css">
    
</head>
<body>
<nav class="navbar bg-body-transparent">
<div class="container-fluid">
    <a class="navbar-brand text" href="#">
    <img src="./rgukt_logo.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
    <span class="text">CDPC RGUKTRKVALLEY </span>
    </a>
</div>
</nav>
<div class=" row ">
        <div class="col-0 col-md-3">

        </div>
        <div class="col-10 col-md-8 col-lg-5 login-container pb-4">
            <h2 class="d-flex flex-row justify-content-center mb-5">Forgot Password</h2>
            <form class="ms-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateSignup()">
                <label for="email">Email</label><br>
                <input type="email" name="fpemail" size="43" placeholder="Enter email Here!" class="input" id="email"required/><br><span id="emailErrorSignup"></span><br>
                <label for="password" class="mt-5">New Password</label><br>
                <input type="password" name="fppassword" size="43" placeholder="Enter New password Here!" class="input"id="password" required/><br><span id="passwordErrorSignup"></span><br>
                <label for="password" class="mt-5">Confirm Password</label><br>
                <input type="password" name="fpcpassword" size="43" placeholder="Confirm password Here!" class="input"id="cpassword" required/><br><span id="cpasswordErrorSignup"></span><br>
   
                <div class="col-12 mt-5"> 
                <button class="btn btn-outline-primary mb-4 me-5 " name="changePassword" type="submit">Change Password</button>  
                <a href="login_page.php" class="login-link">Login</a>
                </form>
                <?php
                if(isset($_POST['changePassword'])){
                $email = $_POST['fpemail'];
                $userpassword = $_POST['fppassword'];
                $server="localhost";
                $username="root";
                $password="";
                $dbname="wt";
                $conn=mysqli_connect($server,$username,$password,$dbname); 
                $select = "UPDATE `logincredentials` SET `password` = '$userpassword' WHERE `logincredentials`.`email` = '$email';";
                $data = mysqli_query($conn,$select);
                if($data){
                    echo "<br>".str_repeat('&nbsp;',0) ."Password has been Changed!";
                }
                else{
                        echo "Password Not Changed!";
                }
                
            }
            
?>
            
            </div>
                
            
        </div>
        
        <div class="col-0 col-md-4 col-lg-6  ">

        </div>
        
        
</div>
</body>
</html>
<script>
let email = document.getElementById('email');
let password = document.getElementById('password');
let cpassword = document.getElementById('cpassword')
let emailErrorSignup = document.getElementById('emailErrorSignup');
let passwordErrorSignup = document.getElementById('passwordErrorSignup');
let cpasswordError = document.getElementById('cpasswordErrorSignup');
let regex = /^[r]{1}[0-9]{6}@[a-z]+\.[a-z]{2}\.[a-z]{2}$/;

function validateSignup(){
    var submission = true;
    if(regex.test(email.value) != true){
        emailErrorSignup.innerText="Enter College Email Id Only!";
        submission = false;
    }
    if(password.value.length < 6){
        passwordErrorSignup.innerText="Password length should greater than 6!";
        submission = false;
    }
    if((password.value) != (cpassword.value)){
        cpasswordError.innerText = "Password must be same as new password";
        submission = false;
    }

    return submission;
}


</script>