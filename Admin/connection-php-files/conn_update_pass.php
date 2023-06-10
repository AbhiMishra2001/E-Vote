<?php
session_start();
include("connection.php");   


$old_password=$_POST['old-password'];
$new_password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$id=$_SESSION['admindata'] ['ID'];





    
    $fetch_old_password="SELECT * FROM register WHERE password='$old_password' AND ID='$id'";
    $old_password_match=mysqli_query($connect, $fetch_old_password);

if(mysqli_num_rows($old_password_match)>0){


if($new_password == $cpassword){



$UPDATE_PASSWORD="UPDATE register SET password='$new_password'  WHERE ID='$id'  ";

$update_password_database=mysqli_query($connect,$UPDATE_PASSWORD );

echo"<script>
alert('Password Sucessfully Changed');
window.location='../AdminDashboard.php';



</script>";

}

else{
    echo"<script>
    alert('Password or conform password does not match');
window.location='../AdminDashboard.php';



</script>";

}
}
else{
    echo"<script>
    alert('Old Password Does Not Match');
window.location='../AdminDashboard.php';



</script>";
 
}











?>