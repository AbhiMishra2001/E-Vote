<?php
//  error_reporting(0);
 session_start();
include('connection-php-files/connection.php');

if(! isset($_SESSION['admindata'])){

echo"<script>

alert('Some Error | This Session Expired Please Login!');
window.location='../index.html';
</script>";

}
$groups=mysqli_query($connect, "SELECT * FROM register WHERE user='C' ");
$groupdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
$_SESSION['groupdata']=$groupdata;
$admindata=$_SESSION['admindata'];
$groupdata=$_SESSION['groupdata'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Voting Result | E-Vote</title>
    <link rel="stylesheet" href="css/voting-result.css">
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
    <a href="VotingResult.php" style="background-color:red;"  >Votting Result</a>
    <a href="ChangePassword.php" >Change Password</a>
  
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






<div id="Candidates">
    <?php
    if($_SESSION['groupdata']){
for($i=0; $i<count($groupdata);$i++){
    ?>
<div id=candidate-votes-and-name-image>
    <div id="candidate_data_show_api">


        <h4 class="candidate-name-text">CANDIDATE NAME : <?php  echo $groupdata[$i]['name']   ?> </h4>
        <h4 class="votes-count-text">Votes :  <?php  echo $groupdata[$i]['votes']   ?></h4>
              

</div>

<!-- <hr> -->
    </div>
    
<?php

}
    } 
    else{

    }
    
    
    
    
    
    
    
    ?>
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