<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login_page.css">
</head>
<body>
<nav class="navbar bg-body-transparent">
<div class="container-fluid">
    <a class="navbar-brand text" href="#">
    <img src="./rgukt_logo.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
    <span class="text"> CDPC RGUKTRKVALLEY </span>
    </a>
</div>
</nav>
<div class=" row ">
        <div class="col-0 col-md-0">

        </div>
        
        
        <div class="col-0 col-md-4 col-lg-6  ">

        </div>
        <div class="col-10 col-md-8 col-lg-5 login-container pb-4">
            <h2 class="d-flex flex-row justify-content-center mb-5">Login</h2>
            <form class="ms-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit = "return validateLogin()">
                <label for="loginemail">Email</label><br>
                <input type="email" name="loginemail" size="43" placeholder="Enter email Here!" class="input " id="loginemail" required/><br><span id="emailError"></span><br>
                <label for="loginpassword" class="mt-5">Password</label><br>
                <input type="password" name="loginpassword" size="43" placeholder="Enter password Here!" class="input "id="loginpassword" required/><br><span id="passwordError"></span>
                <div class="col-12">
                <button class="btn btn-outline-success mt-5 mb-4 me-5 " name="signin" type="submit" id="signIn">Sign In</button></form>
                <a href="signup_page.php" class="signup-link">Create Account</a><br>
                <a href="forgotPassword.php">Forgot Password</a>
            </div>
                
            
        </div>
        
</div>
<script src="login_page.js"></script>
</body>
</html>

<?php

if(isset($_POST['signin'])){
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];
    
    $server="localhost";
    $username="root";
    $password="";
    $dbname="wt";

    $conn=mysqli_connect($server,$username,$password,$dbname);  
    $select = "SELECT * FROM logincredentials WHERE email='$loginemail' &&  password = '$loginpassword';";
    $data = mysqli_query($conn,$select);
    $total = mysqli_num_rows($data);
    if($total == 1){
            $_SESSION['email'] = $loginemail;
            header('location:students_page.php');
    }
    
}
?>