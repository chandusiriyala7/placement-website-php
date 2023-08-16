<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="students_page.css">
</head>
<body class="darkMode">
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand logo " href="#"><img src="placement_logo.jpeg" class="navbar-logo">CDPC*RguktRkv</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#HomePage">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#apply">Apply</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#updates">Updates</a>
        </li>
    </ul>
    <marquee class="head1">Get Your Placement Here! #ChanduSiriyala</marquee>
    
    <a href="apply.php"><button class="btn btn-outline-danger me-3 ps-3" type="submit" value = "LogOut">LogOut</button></a>
    
    
    <button class="btn btn-outline-dark"  id="mode">LightMode</button>
    </div>
</div>
</nav>
<div id="HomePage" class="ms-5">
<div class="d-flex flex-row justify-content-center" >
    <p class="head2 mt-5 "> Top Featured Placement Companies In Our College!</p>    
</div>
<div class="row ms-5">
    <a class="card col-md-3 col-lg-2  me-3" href="https://amazon.jobs/en/">
        <img src="./amazon.jpeg">
        <h1 class="company-name">Amazon</h1>
    </a>
    
    <a class="card col-md-3 col-lg-2 me-3" href="https://careers.google.com/">
        <img src="./google1.jpeg">
        <h1 class="company-name">Google</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://careers.microsoft.com/">
        <img src="./microsoft.jpeg">
        <h1 class="company-name">Microsoft</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.cisco.com/c/en/us/about/careers.html">
        <img src="./cisco.jpeg">
        <h1 class="company-name">Cisco</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3 " href="https://www.apple.com/careers/in/">
        <img src="./apple.jpeg">
        <h1 class="company-name">Apple</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.tcs.com/careers">
        <img src="./tcs.png">
        <h1 class="company-name">TCS</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.deloitte.com/global/en/careers/job-search.html">
        <img src="./delloite.webp">
        <h1 class="company-name">Delloite</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.metacareers.com/">
        <img src="./meta.png">
        <h1 class="company-name">Meta</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.capgemini.com/in-en/careers/">
        <img src="./capgemini.png">
        <h1 class="company-name">Capgemini</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.accenture.com/in-en/careers">
        <img src="./accenture.jpeg">
        <h1 class="company-name">Accenture</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.adobe.com/careers.html">
        <img src="./adobe.jpeg">
        <h1 class="company-name">Adobe</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.intel.com/content/www/us/en/jobs/jobs-at-intel.html">
        <img src="./intel.png">
        <h1 class="company-name">Intel</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://www.ibm.com/careers/in-en/search/">
        <img src="./IBM.png">
        <h1 class="company-name">IBM</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://careers.zoom.us/home">
        <img src="./zoom.jpeg">
        <h1 class="company-name">Zoom</h1>
    </a>
    <a class="card col-md-3 col-lg-2 me-3" href="https://jobs.netflix.com/">
        <img src="./netflix.jpeg">
        <h1 class="company-name">Netflix</h1>
    </a>
</div>
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./carousel3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="./carousel2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="./carousel5.jpeg" class="d-block w-100" alt="...">
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
<div class="row mt-5" id="apply">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateApplication()" enctype ="multipart/form-data">
    <div class="col-12 head2 mb-5 d-flex flex-row justify-content-center"><h1>Apply for Placement.</h1></div>

    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>UploadCV:<input type="file" name="resume" class="input ms-4" size="30" id="resume"/><span id=""></span></label></div>
    <span id="idError" class="d-flex flex-row justify-content-center"></span>
    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>ID Number:<input type="text" name="id" class="input ms-4" size="30" id="id" required/></label></div>
    <span id="nameError" class="d-flex flex-row justify-content-center"></span>
    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>Fullname:<input type="text" name="fullname" class="input ms-4" size="30" id="fullname" required/></label></div>
    <span id="emailError" class="d-flex flex-row justify-content-center"></span>
    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>Email ID:<input type="email" name="email" class="input ms-4" size="30" id="email" required/></label></div>
    <span id="numberError" class="d-flex flex-row justify-content-center"></span>
    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>Number:<input type="text" name="number" class="input ms-4" size="30" id="number" required/></label></div>

    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label name ="gender">Gender:<input type="radio" name="gender" class="input ms-5" size="30" id="male" value="male" required/>Male<input type="radio" name="gender" class="input ms-5" size="30" id="female" value="female"/>Female</label></div>

    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>DOB:<input type="date" name="dob" class="input ms-4" size="30" id="dob" required/></label></div>

    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><label>Branch:<select name="branch" required>
                                                                                    <option value="cse" >CSE</option>
                                                                                    <option value="ece">ECE</option>
                                                                                    <option value="eee">EEE</option>
                                                                                    <option value="civil">CIVIl</option>
                                                                                    <option value="mme">MME</option>
                                                                                    <option value="mech">MECH</option>
                                                                                    </select></label></div>

    <div class="col-12  mb-5 d-flex flex-row justify-content-center"><button class="btn btn-outline-info ms-5" type="submit" name="applicationsubmit">Submit</button></div> 
    <span id="applicationSuccess" class="d-flex flex-row justify-content-center"></span>
    </form>
</div>
<div id="updates">
<div class="d-flex flex-row justify-content-center">
    <p class="head2 mt-5">Updates!</p>    
</div>
<div class="row updates-container">
    <div class="col-4 card">
        <img src="./google1.jpeg" class="updates-img">
    </div>
    <div class="col-8">
    <h1>Shortlist Released!</h1>
    <p>Google has released the shortlist of 10 students in our for the final Interview >><a href="www.rgukt.com">www.rgukt.com</a>.Here is the list of that 10 students.Congratulations and All the Best for the Final Interview👍🏻.</p>
    </div>
</div>
<div class="row updates-container">
    <div class="col-4 card">
        <img src="./tcs.png" class="updates-img">
    </div>
    <div class="col-8">
    <h1>Good News For You All</h1>
    <p>TCS is coming to our campus on this month end for campus placements ,So i am informing to all the final year students to be prepare well And Crack it👍🏻. For any Placement related queries send an email to >><a href="placementofficer.rguktrkv.ac.in">www.rgukt.com</a></p>
    </div>
</div>
<div class="row updates-container">
    <div class="col-4 card">
        <img src="./intel.png" class="updates-img">
    </div>
    <div class="col-8">
    <h1>Intership Alert!</h1>
    <p>For All The Enginnering 3rd Year Students , Intel is going to give internship offers to you all, so there will be an exam for intership on Jan 3rd 2024. So be prepared For that and All the Best👍🏻. For any related Queries feel free to send an email to >> <a href="www.rgukt.com">placementofficer.rguktrkv.ac.in</a> </p>
    </div>
</div>
<div class="about-us bg-secondary">
<div class="d-flex flex-row justify-content-center">
    <p class="head2"><u>Contact Us</u></p>    
</div>
<div class="row ">
    <div class="col-2"></div>
    <div class="col-5 col-md-3 col-lg-2 card">
        <img src="./contactus.jpeg" class="">
    </div>
    <div class="col-4 ms-3">
        <h2 class="mb-3">Dean of Academics</h2>
        <h3 class="mb-5">Prof.Rathna Kumari Challa</h3>
        <h4 class="mb-3"> 📞 +91919191911</h4>
        <h4>📩 deanofacademic@rguktrkv.ac.in</h4>
    </div>
    <div class="col-12  mt-5 ">
    <div class="row mt-5">
        <a class="col-4 d-flex flex-row justify-content-center" id="git">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-github mt-1" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg><p style="font-size:22px;">chandusiriyala7/</p>
        </a>
        <a class="col-4 d-flex flex-row justify-content-center" id="insta">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram mt-1" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg><p style="font-size:22px;">chandusiriyala/</p>
        </a>
        <a class="col-4 d-flex flex-row justify-content-center" id="youtube">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-youtube mt-1" viewBox="0 0 16 16">
        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
        </svg><p style="font-size:22px;">chandusiriyala/</p>
        </a>

    </div>
</div>
</div>
</div>
<script src="students_page.js"></script>
</body>
</html>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="wt";

    $conn=mysqli_connect($server,$username,$password,$dbname); 
    if($conn){
        echo "Connection Successfull";
    }

    $session_mail = $_SESSION['email'];
    if(!$session_mail == true){
        //header('location:login_page.php');
        ?>
        <meta http-equiv= "refresh" content ="0 ; url =https://localhost/placement-website-php-main/login_page.php" />
    <?php
    }


    if(isset($_POST['applicationsubmit'])){
        
        $resume =$_POST['resume'];
        $id = $_POST['id']; 
        $fullname = $_POST['fullname']; 
        $email = $_POST['email']; 
        $number = $_POST['number']; 
        $dob = $_POST['dob']; 
        
        $filename = $_FILES['resume']['name'];
        $tempname = $_FILES['resume']['tmp_name'];
        $upload = 'uploads/'.$filename ;
        move_uploaded_file($tempname,$upload);
        $sql ="INSERT INTO `applicationDetails` (`resume`,`id`, `fullname`, `email`, `number`, `dob`) VALUES ('$resume','$id', '$fullname', '$email', '$number', '$dob');"; 
        if(mysqli_query($conn,$sql)){
            echo "Inserted Successfully";
        }

    }

 

?>