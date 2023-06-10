<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Forgot | E-Vote </title>

    <link rel="stylesheet" href="css/ForgotPassword.css">



</head>
<body>
    
    <header id="header">
        <div id="main-logo-design">    
            <a href="../index.html"> <img src="../e-voter-project-image/project-main-logo-image-removebg-preview.png"  class="project-logo-image-1" >
            </a>
              <h3 id="logo-name-and-page-logo-1"><a href="../index.html" class="logo-name-1">E-</a></h3> 
              <h3 id="logo-name-and-page-logo-2"><a href="../index.html" class="logo-name-2">VOTE</a></h3>
        
              
          </div>
        
        
        
        
        <ul>
        
          <li><a class="active" href="#">Contact US</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Candidate Details</a></li>
          <li><a href="">Result </a></li>
          <li><a href="#about">HOME</a></li>
        
        </ul>
        
        
        
          
        </header>

        <div id="form-container">
<form action="connection-files\details-check.php" method="POST"   id="form-main">

<h4 style="color: red; margin-bottom: 9px; font-size: 20px; ">
         * Fill Details And Forgot Password *</h4>
<label for="name">Name: </label><br>
<input type="text" name="name" id="" placeholder="Enter Full Name..." required><br><br>

<label for="mobile">Mobile:</label><br>
<input type="text" name="mobile" id="" placeholder="Enter Mobile Number..." required><br><br>

<label for="aadhar">Aadhar:</label><br>
<input type="text" name="aadhar" id="" placeholder="Enter Aadhar Number..." required><br><br>

<select name="user">
  <option value='V'>VOTER</option>
  <option value='A'>ADMIN</option>



</select>
<button type="submit" style="cursor: pointer; " id="Submit-btn"> Submit</button>
</form>
</div>

</body>
</html>