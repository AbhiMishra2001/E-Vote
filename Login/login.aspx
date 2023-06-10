<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Votting || login </title>
    <link rel="stylesheet" href="css/login.css">
</head>


<body>
    

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
            <div class="navbar-design-main"> 
                <ul class="navbar-design-ul">
                
                    
                    <button type="submit" class="sign-btn"> <a href="../Registration/Registration.aspx">Sign Up</a> </button>
              
                   
                </ul>
                </div>
                
        
       </header>




     

       </div>

<div id="login-page-design-sec-2">
              
     <div class="login-page-design-main">
             <form action="../Database-connection-files/login.php" method="POST">
                   <h4 class="login-page-heding-login"> Log in</h4><br>
                   <label>Username<span style="color: red;">*</span>  </label><br>
                   <input type="text" name="username" id="username" placeholder="Enter User Name" required><br><br>
        
                    <label>Password<span style="color: red;">*</span> </label><br>
                      <input type="password" name="password" id="passwd" placeholder="Enter Your Password" required><br><br>

                     <p class="user-type-container">Select User type: </p>
 <br>
                     <select name="user" class="select-option-design-container"> 
                                   
                        <option value="V">Voter</option>
                        <option value="A">Admin</option>
                    </select><br><br>
                     
                      <button class="login-btn">Login</button><br><br>

                      <p class="forgot-password-text"><a href="../ForgotPassword/ForgotPassword.aspx">forgot Password ?</a></p>

                 <p class="new-user-text">New User ?<a href="../Registration/Registration.aspx">Register here</a></p>
                  
               </form>
 
        </div >

</div>
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