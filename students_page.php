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
    <p class="head2 mt-5"> Top Featured Placement Companies In Our College!</p>    
</div>
<div class="row ms-5">
    <div class="card col-md-3 col-lg-2  me-3">
        <img src="./amazon.jpeg">
        <h1 class="company-name">Amazon</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./google1.jpeg">
        <h1 class="company-name">Google</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./microsoft.jpeg">
        <h1 class="company-name">Microsoft</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ cisco.jpeg">
        <h1 class="company-name">Cisco</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3 ">
        <img src="./ apple.jpeg">
        <h1 class="company-name">Apple</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ tcs.jpeg">
        <h1 class="company-name">TCS</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./delloite.webp">
        <h1 class="company-name">Delloite</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ meta.jpeg">
        <h1 class="company-name">Meta</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ capgemini.jpeg">
        <h1 class="company-name">Capgemini</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./accenture.jpeg">
        <h1 class="company-name">Accenture</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./adobe.jpeg">
        <h1 class="company-name">Adobe</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ intel.jpeg">
        <h1 class="company-name">Intel</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./ IBM1.jpeg">
        <h1 class="company-name">IBM</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./zoom.jpeg">
        <h1 class="company-name">Zoom</h1>
    </div>
    <div class="card col-md-3 col-lg-2 me-3">
        <img src="./netflix.jpeg">
        <h1 class="company-name">Netflix</h1>
    </div>
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
<div class="row">
<div class="col-2"></div>
<div id="apply" class="col-10">
<div class="d-flex flex-row justify-content-center">
    <p class="head2 mt-5">Upload your details for Placement>></p>    
</div>

<div class="form-container mb-3 ms-5ss">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="row">
        <div class="col-1 col-md-3"></div>
        <div class=" col-12 col-md-8 mb-3">
            <label class="col-2">   IDNumber : </label>
            <input type="text" name="id" placeholder="R******" size="60" class="input col-5"/>   
        </div>
        <div class="col-1  col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">   FullName : </label>
            <input type="text" name="fullname" placeholder="Enter Your FullName Here!" size="60" class="input col-5"/>   
        </div>
        <div class="col-1 col-md-3"></div>
        <div class="col-md-8  mb-3">
        <label class="col-2">EmailID : </label>
        <input type="email" name="email" placeholder="Enter Your EmailID Here!" size="60" class="input col-5"/> 
        </div>
        <div class="col-1 col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">Number:</label>
            <input type="number" name="number" placeholder="Enter Your Number Here!" size="60" class="input col-5"/>
        </div>
        <div class="col-1  col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">   Date Of Birth : </label>
            <input type="date" name="dob" placeholder="Enter Your Date of Birth Here!" size="60" class="input col-5"/>   
        </div>
        <div class=" col-1 col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">   Gender : </label>
            <input type="radio" name="gender" value="male"   class="input "/> Male 
            <input type="radio" name="gender" value="female" class="input "/>Female
        </div>
        <div class="col-1  col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">   Branch : </label>
            <select>
                <option>CSE</option>
                <option>ECE</option>
                <option>EEE</option>
                <option>CIVIL</option>
                <option>CHEMICAL</option>
                <option>MME</option>
                <option>MECH</option>
            </select>
        </div>
        <div class="col-1  col-md-3"></div>
        <div class="col-md-8 mb-3">
            <label class="col-2">   UploadCV : </label>
            <input type="file" name="cv" placeholder="Upload Your CV File Here!" size="60" class="input col-5"/>   
        </div>
        
        <div class="col-1  col-md-3 mt-5"></div>
        <div class="col-md-8 mb-3">
            <label class="col-6">  </label>
            <submit class="btn btn-primary col-5" name="submitDetails" type="submit">Submit</submit>
        </div>
    </div>

</form>
</div>
</div>
</div> 
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
        <img src="./ tcs.jpeg" class="updates-img">
    </div>
    <div class="col-8">
    <h1>Good News For You All</h1>
    <p>TCS is coming to our campus on this month end for campus placements ,So i am informing to all the final year students to be prepare well And Crack it👍🏻. For any Placement related queries send an email to >><a href="placementofficer.rguktrkv.ac.in">www.rgukt.com</a></p>
    </div>
</div>
<div class="row updates-container">
    <div class="col-4 card">
        <img src="./ intel.jpeg" class="updates-img">
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
</div>
</div>
</div>
<script>
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
    })
</script>
</body>
</html>
<?php
$server="localhost";
$username="root";
$password="";
$dbname="wt";

$conn=mysqli_connect($server,$username,$password,$dbname);  
$session_mail = $_SESSION['email'];
if(!$session_mail == true){
    //header('location:login_page.php');
    ?>
    <meta http-equiv= "refresh" content ="0 ; url =http://localhost/php_files/%20WT_Project/%20login_page.php" />
<?php
} 
?>
<?php
if(isset($_POST['submitDetails'])){

    $id = $_POST['id']; 
    $fullname = $_POST['fullname']; 
    $email = $_POST['email']; 
    $number = $_POST['number']; 
    $dob = $_POST['dob']; 
    $gender = $_POST['gender']; 
    $branch = $_POST['branch']; 

    $sql ="INSERT INTO `applicationDetails` (`id`, `fullname`, `email`, `number`, `dob`, `gender`, `branch`) VALUES ('$id', '$fullname', '$email', '$number', '$dob', '$gender', '$branch');";
    $query = mysqli_query($conn,$sql);
    if($quey){
        echo "Inserted Successfully";
    }


}
?>
