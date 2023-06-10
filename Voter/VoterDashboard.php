<?php

session_start();

 if(! isset($_SESSION['userdata'])){
 
    echo"<script>
    alert('Session Expired | Please Login Again !');
    window.location='../index.html';
    
    
    </script>";
 
}

 $userdata =$_SESSION['userdata'];
 $groupdata=$_SESSION['groupdata'];

 if( $_SESSION['userdata'] ['status'] ==0){
    $status = '<b style="color:red">   Not Voted</b>';
 }
 else{
    $status = '<b style="color:green">  Voted</b>';
 }



?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Votting ||Online-Votting </title>
    <link rel="stylesheet" href="css/dashboard.css">
   
               
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


      <div id="user_api_image_set">
          <img  id="voter_image_main_page_show" src="../uploads/<?php  echo $userdata['image'] ?>" width=53px , height=50px >


             </div>



            <!-- ====== header all content section ====== -->
            <div class="navbar-design-main"> 
                <ul class="navbar-design-ul">
                
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="../other-html-pages/main-extra-html-pages_html/result.html"> RESULT</a></li>
                    <li><a href="../other-html-pages/main-extra-html-pages_html/candidate.html"> CANDIDATE DETAILS</a></li>
                    <li><a href="../other-html-pages/main-extra-html-pages_html/about.html"> ABOUT</a></li>
                    <li><a href="../other-html-pages/main-extra-html-pages_html/contact.html"> CONTACT</a></li>
                    <button id="logout-btn"><a href="../UserLogout/logout.php"> Logout </a></button>
                </ul>
                </div>
                
        
       </header>






     <!-- ========= -->

  



<div id="Profile">

<h3 class="voter-details-text-heading"> Voter Details</h3>
<h4 id="name-heading">NAME : <?php echo $userdata['fullname'] ?> </h4><br>
<h4 id="aadhar_number_heading">Aadhar No. :<?php echo $userdata['aadhar'] ?></h4><br>
<h4 id="mobile-no-heading">Mobile NO. : <?php echo $userdata['mobile'] ?></h4> <br>
<h4 id=" status-heading">Status :<?php echo  $status ?> </h4><br>
</div>

<div id="candidate-heding">
     <h3>Available Candidate For Votting</h3>
</div>


<div id="Candidates">
    <?php
    if($_SESSION['groupdata']){
for($i=0; $i<count($groupdata);$i++){
    ?>
<div id=candidate-votes-and-name-image>
    <div id="candidate_data_show_api">
<img src="../uploads/<?php  echo $groupdata[$i]['image']   ?>" width=100px , height=100px  class="candidate-image">

        <h4 class="candidate-name-text">CANDIDATE NAME : <?php  echo $groupdata[$i]['name']   ?> </h4>
        <!-- <h4 class="votes-count-text">Votes :  <?php  echo $groupdata[$i]['votes']   ?></h4> -->
              <form action="../Database-connection-files/votes.php" method="POST">
<input type="hidden" name="cvotes"   value="<?php echo $groupdata[$i]['votes']?>">
<input type="hidden" name="cid"    value="<?php echo $groupdata[$i]['ID']?>">
<input type="submit" name="votebtn" value="vote" id="votebtn">
</form>
</div>

<hr>
    </div>
    
<?php

}
    } 
    else{

    }
    
    
    
    
    
    
    
    ?>
</div>


</body>
</html>


