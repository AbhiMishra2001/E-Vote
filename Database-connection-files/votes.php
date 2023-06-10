<?php
session_start();
include("connection.php");

$votes =$_POST['cvotes'];
$total_votes =$votes+1;
$cid =$_POST['cid'];
$uid =$_SESSION['userdata']['ID'];






if( $_SESSION['userdata'] ['status']==1){

    echo"
<script>
alert(' Voter Already Voted  ! ');
window.location='../Voter/VoterDashboard.php';

</script>


";



}
else{

$sql_connect_query="UPDATE register SET votes='$total_votes' WHERE ID='$cid'";


$updates=mysqli_query($connect ,$sql_connect_query);
$update_user_status= mysqli_query($connect, "UPDATE register SET status=1 WHERE ID='$uid'");


if($updates and $update_user_status){

$groups=mysqli_query($connect, "SELECT * FROM register WHERE user='C' ");
    $groupdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    
    $_SESSION['userdata'] ['status']=1;
$_SESSION['groupdata']=$groupdata;

echo"
<script>
alert(' votting Sucessfull ! ');
window.location='../Voter/VoterDashboard.php';

</script>


";
}
else{
    echo"
<script>
alert(' Some Error Occured ! invalid Request ');
window.location='../Voter/VoterDashboard.php';

</script>


";
}
}
?>
