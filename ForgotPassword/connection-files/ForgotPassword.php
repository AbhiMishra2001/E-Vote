<?php
error_reporting(0);
include("connection.php");   


$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$voter_id=$_SESSION['userdata'] ['ID'];
$admin_id=$_SESSION['admindata']['ID'];
$admin_user_type=$_POST['user'];





$user_select=mysqli_query($connect, "SELECT * FROM register WHERE user='$admin_user_type'");


if($password == $cpassword){


if(mysqli_num_rows($user_select)>0){
    if($admin_user_type=='A')


$password_forgot=mysqli_query($connect, "UPDATE register SET password='$password' WHERE ID='$admin_id'");

echo"<script>
alert('Password Forgot Sucessfully | Login ');
window.location='../../aspx-files/login.aspx';
</script>";
}
if($admin_user_type=='V'){



    $password_forgot=mysqli_query($connect, "UPDATE register SET password='$password' WHERE ID='$voter_id'");
    echo"<script>
    alert('Invalid Details ');
    window.location='../../aspx-files/login.aspx';
    </script>";

}
}
else{
    echo"<script>
    alert('Password and Confrom Password Deos not Match');
    window.location='../../aspx-files/ForgotPassword.aspx';
    </script>";

}























?>



