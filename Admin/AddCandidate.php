
<?php

error_reporting(0);
session_start();
if(! isset($_SESSION['admindata'])){

echo"<script>

alert('Session Expired | Some Error 4004 !');
window.location='../../aspx-files/login.aspx';
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
    <title>Add Candidate Details For E-votting</title>
    <link rel="stylesheet" href="css/Add-Candidate.css">


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
<body>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidate | E-vote</title>
    <link rel="stylesheet" href="css/Admin-Profile.css">
</head>
<body>
    <header id="header">
<div id="main-logo-design">    
    <a href="../index.html"> <img src="../e-voter-project-image/project-main-logo-image-removebg-preview.png"  class="project-logo-image-1" >
    </a>
      <h3 id="logo-name-and-page-logo-1"><a href="../index.html" class="logo-name-1">E-</a></h3> 
      <h3 id="logo-name-and-page-logo-2"><a href="../index.html" class="logo-name-2">VOTE</a></h3>

      <h3 class="welcome-text" >Welcome Admin !</h3>
  </div>




<ul>


<div class="navbar">
    <a href="AdminDashboard.php">Dashboard</a>
    <a href="VotingResult.php">Votting Result</a>
    <a href="ChangePassword.php">Change Password</a>
  
    <div class="dropdown">
      <button class="dropbtn" style="background-color:red;"> Manage Candidate
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









<div class="from-container">

    <form action="connection-php-files/conn_add_candidate.php" method="POST" enctype="multipart/form-data"  class="register-form-design-main-content">
        <h3 class="register-form-heding">Add Candidate</h3>
<label class="text-filed-1 "> Candidate Name:</label>
<input type="text" name="name" placeholder="Enter name" maxlength="30" required>

<label class="text-filed-2"> Father Name:</label>
<input type="text" name="fname" placeholder="Enter name" maxlength="30" required><br><br>

<label  class="text-filed-3">Gender:</label>
<input type="radio" name="Gender" id="gender" value="M">
<span>Male</span>
<input type="radio" name="Gender" id="gender" value="F">
<span>Female</span>
<input type="radio" name="Gender" id="gender" value="O">
<span>Other</span>


<label class="text-filed-4 "> Date Of Birth:</label>
<input type="date" name="dob" placeholder="Enter Aadhar no." required><br><br>

<label class="text-filed-5 ">Aadhar Number:</label>
<input type="number" name="aadhar" placeholder="Enter Aadhar no." required>

<label  class="text-filed-6 ">Mobile Number:</label>
<input type="number" name="number" placeholder="Enter mobile no."  required><br><br>


<label class="text-filed-7">Email:</label>
<input type="email" name="email" placeholder="Enter Aadhar no." required>

<label class="text-filed-8">Address:</label>
<input type="text" name="address" placeholder="Enter Address.." required><br><br>

<label class="text-filed-9">PIN Code:</label>
<input type="number" name="pin-code" placeholder="Enter Pincode"  maxlength="6" required>

<label  class="text-filed-10">Party Name:</label>
<input type="text" name="party-name" placeholder="Enter Party Name.." required><br><br>

<label for="state" class="text-filed-11 ">States</label>
<select name="states" id="">
    <option >Select State</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="AP">Arunachal Pradesh</option>
</select required><br><br>



<label class="text-filed-12 ">Upload Image</label>
<input type="file" name="photo" id="image-upload-container"  required><br><br>


<button type="submit" id="ac-btn">ADD Candidate</button><br><br>



    </form>
</div>
</body>
</html>