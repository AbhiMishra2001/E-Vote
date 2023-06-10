



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTTER REGISTER</title>
    <link rel="stylesheet" href="css/register.css">

    <style>

        /*=========== Remove Spin Arrow in Number Type=========*/
    
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button{
       -webkit-appearance: none;
       margin:0;
    }
    input[type=number]{
     -moz-appearance: textfield;
    }
    
    </style>
</head>
<body >
 <!-- ========== header section design======= ========= -->

<header id="navbar-design-header-main">
    <!-- ====== logo design on website logo name and image ======== -->
   
   <div id="main-logo-design">    
      <a href="../index.html"> <img src="../e-voter-project-image/project-main-logo-image-removebg-preview.png"  class="project-logo-image-1" >
      </a>
        <h3 id="logo-name-and-page-logo-1"><a href="../index.html" class="logo-name-1">E-</a></h3> 
        <h3 id="logo-name-and-page-logo-2"><a href="../index.html" class="logo-name-2">VOTE</a></h3>
    </div>
  </div>
  <!-- ====== header all content section ====== -->
        
            
            
    
   </header>


<div class="container">
    <form action="../Database-connection-files/register.php" method="POST" enctype="multipart/form-data"  class="register-form-design-main-content">
        <h3 class="register-form-heding">Register Here</h3>
<label>Name</label>
<input type="text" name="name" placeholder="Enter name" maxlength="30" required><br>
<label>Mobile no.</label>
<input type="number" name="number" placeholder="Enter mobile no."  required><br>

<label>Password</label>
<input type="password" name="password" placeholder="Enter password" required><br>
<label>Conform Password</label>
<input type="password" name="cpassword" placeholder="Enter conform password" required><br>
<label >Address</label>
<input type="text" name="address" id="user-address" placeholder="Enter Address" minlength="1" maxlength="25" required><br>
<label>Aadhar Number</label>
<input type="number" name="aadhar" placeholder="Enter Aadhar no." required><br>

<label>Upload Image</label>
<input type="file" name="photo" id="image-upload-container"  required><br>

 <p class="user-type-container">Select User type:</p>
 <br><select name="user" class="select-option-design-container"> 
    
    <option value="V">Voter</option>
    <option value="A">Admin</option>
</select><br><br>
<button type="submit" id="reg-btn">Register</button><br><br>

<p class="other-details-insert-last-text">
 Have already an account ?<a href="../Login/login.aspx">Login here</a></p>

    </form>
</div>


<!-- footer div section -2  -->

<div id="footer-details-insert-section-2"> 
    <p class="copyright-and-website-update-details">Copyright ©E-Vote Voting 2023. All rights reserved  </p>
     <p class="Developer-info-details"> Developed By ANN Group GSCE (Sagar) </p>
     <p class="-web-update-details-provide">Site Last Update :15/04/2023</p>
     <p class="contact-email-website-provide">Email:-evote@support.gmail.com</p>
  
  
  </div>


</body>
</html>