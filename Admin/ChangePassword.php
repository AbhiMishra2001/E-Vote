<?php

error_reporting(0);
session_start();
if(! isset($_SESSION['admindata'])){

echo"<script>

alert('Some Error | This Session Expired Please Login!');
window.location='../index.html';
</script>";

}

$admindata=$_SESSION['admindata'];


?>




<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Change Password | E-vote</title>
    <link rel="stylesheet" href="css/Update-password.css">
</head>
<body>
    
   
<header id="header">
<div id="main-logo-design">    
    <a href="../index.html"> <img src="../e-voter-project-image/project-main-logo-image-removebg-preview.png"  class="project-logo-image-1" >
    </a>
      <h3 id="logo-name-and-page-logo-1"><a href="../index.html" class="logo-name-1">E-</a></h3> 
      <h3 id="logo-name-and-page-logo-2"><a href="../index.html" class="logo-name-2">VOTE</a></h3>

      <h3 class="welcome-text">Welcome Admin !</h3>
  </div>




<ul>
  
<div class="navbar">
    <a href="AdminDashboard.php">Dashboard</a>
    <a href="VotingResult.php" >Votting Result</a>
    <a href="ChangePassword.php" style="background-color:red;"  >Change Password</a>
  
    <div class="dropdown">
      <button class="dropbtn"> Manage Candidate
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="AddCandidate.php">Add Candidate </a>
        <a href="#">Delete Candidate</a>
        <a href="#">Modify Candidate</a>
      </div>
    </div> 
    <a href="connection-php-files/contact.php">Contact</a>
  </div>

  <button type="submit" id="logout-btn"><a href="../UserLogout/logout.php">Log out</a></button>
</ul>



  
</header>



<div id="pass-update-form-div">

    <form  class="pass-update-form"   action="connection-php-files/conn_update_pass.php" method="POST">

          

        <label for="old-password">Current Password :</label><br>
        <input type="password" name="old-password"  id="old-pass"      placeholder="Enter Old Password.."  required><br><br>

        <label for="password"> New Password: </label><br>
        <input type="password" name="password" id="new-pass" placeholder="Enter New Password..." required><br><br>
        
        <label for="cpassword"> Conform New Password:</label><br>
        <input type="password" name="cpassword" id="cpass" placeholder="Enter Conform Password..." required><br><br>
        
        <input type="hidden" name="id"  value="<?php echo $admindata['ID'] ?>">

        
      
        
        
        <button type="submit" style="cursor: pointer; " id="update-btn"> Update Password</button>
        </form>




</div>


<footer id="footer-details-insert-section-1">
  
    <!--  footer div section -1 -->
    
    
    <div class="footer-details-section-cover-1">
    
         <div class="footer-sec-1-text-heding-and-sub-heding">
          <img class="-foot-sec-1-logo-image" src="../e-voter-project-image/project-main-logo-image-removebg-preview.png">
          
          <h5 class="-foot-sec-1-text-heading-1">E-</h5>
          <h5 class="-foot-sec-1-text-heading-2"> Vote</h5>
                 <h5 class="-foot-sec-1-text-sub-heding">Easy & Secure Vote </h5>
                 </div>
    
       <div class="-foot-navbar-content-main">
            <p class="-foot-sec-1-navbar-tag-home">
               <a href="../index.html">  Home </a>|
             </p>
             <p class="-foot-sec-1-navbar-tag-contact-us">
               <a href="../other-html-pages/main-extra-html-pages_html/contact.html">Contact Us </a>|
                 </p>
                 <p class="-foot-sec-1-navbar-tag-how-it-work">
                 <a href="#"> How it Work </a>|
                     </p>
                     <p class="-foot-sec-1-navbar-tag-FAQ">
                     <a href="#"> FAQ'S</a>
                         </p>
    
                    
                    
       </div>
        
       <div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
        <script  src="../JS/real_time.js"></script>
          <p class="current-time-text-show">Current-Time:</p>
    </div>
    <!-- footer div section -2  -->
    
    <div id="footer-details-insert-section-2"> 
      <p class="copyright-and-website-update-details">Copyright ©E-Vote Voting 2023. All rights reserved  </p>
       <p class="Developer-info-details"> Developed By ANN Group GSCE (Sagar) </p>
       <p class="-web-update-details-provide">Site Last Update :26/04/2023</p>
       <p class="contact-email-website-provide">Email:-evote@support.gmail.com</p>
    
    
    </div>
    </footer>
</body>
</html>