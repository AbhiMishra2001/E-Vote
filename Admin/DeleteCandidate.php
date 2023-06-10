
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
    <title>Delete Candidate</title>
    <link rel="stylesheet" href="css/DeleteCandidate.css">
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



  <div class="navbar">
    <a href="AdminDashboard.php">Dashboard</a>
    <a href="VotingResult.php">Votting Result</a>
    <a href="ChangePassword.php">Change Password</a>
  
    <div class="dropdown">
      <button class="dropbtn"> Manage Candidate
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="AddCandidate.php">Add Candidate </a>
        <a href="DeleteCandidate.php">Delete Candidate</a>
        <a href="#">Modify Candidate</a>
      </div>
    </div> 
    <a href="connection-php-files/contact.php">Contact</a>
  </div>




  <button type="submit" id="logout-btn"><a href="../UserLogout/logout.php">Log out</a></button>
</ul>



  
</header>



<div>
<form class=""    action="conn-delete-candidate.php"  method="POST"> 

<h3>* Enter Candidate For Delete From Portal *</h3>
<h4>  Please Enter Proper Details !</h4>






</form>
</div>

</body>
</html>