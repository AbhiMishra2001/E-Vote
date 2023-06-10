<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-VOTE || Contact Us </title>

    


    <link rel="stylesheet" href="css/contact.css">



</head>
<body>
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
      <div class="navbar-design-main"> 
        <ul class="navbar-design-ul">
          
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../Result/Result.aspx"> RESULT</a></li>
          <li><a href="../CandidateDetails/CandidateDetails.aspx"> CANDIDATE DETAILS</a></li>
          <li><a href="../About/About.aspx"> ABOUT</a></li>
          <button id="login-btn"><a href="../Login/login.aspx">Login</a></button>
         
      </ul>
          
          </div>
          
  
 </header>
<div id="image-insert-after-navbar-image">

<img src="../e-voter-project-image/Investor-E-Voting-Banner.jpg" width="100%" height="340px" >
   
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Give Your Feedback And Send Message Any Isssue :</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../e-voter-project-image/images.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="../api/feedback.php" method="POST">
        <label for="name"> Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="email" id="lname" name="email" placeholder="Your Email.." require>
        <label for="country">Country</label>
        <select id="country" name="country">
        <option>Select Country</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india">India</option>
          <option value="uk">UK</option>
          
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
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
             <a href="">Contact Us </a>|
               </p>
               <p class="-foot-sec-1-navbar-tag-how-it-work">
               <a href="#"> How it Work </a>|
                   </p>
                   <p class="-foot-sec-1-navbar-tag-FAQ">
                   <a href="feedback.html"> FAQ'S</a>
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
     <p class="-web-update-details-provide">Site Last Update :15/04/2023</p>
     <p class="contact-email-website-provide">Email:-evote@support.gmail.com</p>
  
  
  </div>
  </footer>
</body>
</html>