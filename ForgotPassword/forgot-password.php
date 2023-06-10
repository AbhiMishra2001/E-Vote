<?php
error_reporting(0);
session_start();



$admindata=$_SESSION['admindata'];
$userdata=$_SESSION['userdata'];



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password </title>

<style>
  *{
    margin: 0;
    padding: 0;
}



/*  ========== logo and name design ========= */
#main-logo-design{
    margin-top: -8px;
 
 }
 .project-logo-image-1{
    width: 30px;
     height: 10vh;
     margin-left: 11px;
 
  
   }
 
 
   #logo-name-and-page-logo-1
   {
    
     
       color:red;
       text-transform: inherit;
       font-family: Arial, Helvetica, sans-serif;
       font-variant: small-caps;
   
       font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 35px;
   
   }
   
   .logo-name-1
   { 
       color: rgba(9, 255, 222, 0.596);
       text-decoration: none;
       margin-left: 40px;
       position: absolute;
       top: 8px;
       left: -3px;
   
   }
   
   
   
   #logo-name-and-page-logo-2
   {
    
   color: rgba(255, 0, 0, 0.781);
   font-family: Arial, Helvetica, sans-serif;
   font: 200;
   font-size: 20px;
  
   
   }
   
   .logo-name-2{
       color: rgba(255, 0, 0, 0.781); 
       text-decoration: none;
      position: absolute;
      top: 30px;
      left: 60px;
   }

   
  /* ===== navbar design ======= */
  
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: right;
    margin-right: 50px;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  
  li a:hover {
    color: rgb(192, 19, 100);
    background-color: aliceblue;
  }



  /*  ========== from design====== */


  #form-container{
    position: absolute;
    top: 30%;
    background-color: wheat;
 left: 20%;
 width: 40%;
 height: 50vh;
 border-radius: 20px;

  }

  #form-main{
    padding: 10px 90px;
  }

  label{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 300;
    color:black;
  }

  input{
    border: 1px solid black;
    padding: 7px 30px;
    border-radius: 7px;
  }
#Submit-btn{
    padding: 7px 20px;
    position: relative;
    left: 45%;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 7px;
    background-color: rgb(50, 8, 238);
    color: white;
}



 
   
 

</style>
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
  <li><a class="active" href="admin_dashboard.php">Dashboard</a></li>
  <li><a href="#news">Live Votting Result</a></li>
  
  <li><a href="admin-candidate-add/candidate-Add.php">Add Candidate + </a></li>
  <li><a href="#about">Contact</a></li>


</ul>



  
</header>


<div id="form-container">
<form action="#" method="POST"   id="form-main">

<h4 style="color: red; margin-bottom: 9px; font-size: 20px; ">
         * Enter New Password*</h4>


<label for="mobile">New Password:</label><br>
<input type="Password" name="newpass" id="" placeholder="Ente New Password..." required><br><br>

<label for="aadhar">Conform Password:</label><br>
<input type="Password" name="conpass" id="" placeholder="Enter Conform Password..." required><br><br>




<button type="submit" style="cursor: pointer; " id="Submit-btn"> Submit</button>
</form>
</div>
</body>
</html>