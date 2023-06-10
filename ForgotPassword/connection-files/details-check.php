<?php

include("connection.php");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];


$fetch_data=mysqli_query($connect, "SELECT * FROM register WHERE name='$name' AND mobile='$mobile' AND aadhar='$aadhar'");

$check_data=mysqli_num_rows($fetch_data);

if($check_data){
echo"<script>
window.location='../forgot-password.php';
</script>";
}
else{
    echo"<script>
    alert('User Data Not Match !');
    window.location='../../aspx-files/login.aspx';
    </script>"; 
}

















?>