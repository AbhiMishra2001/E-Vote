<?php

session_start();
include("connection.php");


$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user'];

$sql = "SELECT  * FROM login WHERE username= '$username' AND password='$password' AND usertype='$user_type'" ;

$check= mysqli_query($connect , $sql);

if(mysqli_num_rows($check)>0){

if($user_type == 'A'){
echo"<script>

window.location='../Admin/AdminDashboard.php';

</script>
";


$admins=mysqli_query($connect , "SELECT * FROM login  WHERE username= '$username' AND password='$password' AND  usertype='A' ");
$admindata=mysqli_fetch_array($admins);
$_SESSION['admindata']=$admindata;




}

else{

$userdata=mysqli_fetch_array($check);
$groups=mysqli_query($connect, "SELECT * FROM register WHERE user='C' ");
$groupdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

$_SESSION['userdata']=$userdata;
$_SESSION['groupdata']=$groupdata;

echo"
<script>

window.location='../Voter/VoterDashboard.php';

</script>
";
}
}
else{
echo"
<script>
alert(' User Not Found Please Register Here ! ');
window.location='../Registration/Registration.aspx';

</script>
";
}


?>