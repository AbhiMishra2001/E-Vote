<?php

include("connection.php");

$name =$_POST['name'];
$mobile =$_POST['number'];
$address =$_POST['address'];
$aadhar =$_POST['aadhar'];
$image =$_FILES['photo'] ['name'];
$tmp_name = $_FILES['photo'] ['tmp_name'];


$check_aadhar="SELECT * FROM register WHERE aadhar='$aadhar'";
$data_check=mysqli_query($connect,$check_aadhar);
$same_value=mysqli_num_rows($data_check);


if($same_value>0){
    echo"
    <script>
    alert(' Candidate Already Registered  ');
    window.location='../AdminDashboard.php';
    
    </script>
    
    
    ";
}

else{

 move_uploaded_file($tmp_name ,"../../uploads/$image");

 $sql="INSERT INTO register(name , mobile,  address, aadhar, image, user, status, votes) 
 VALUES('$name','$mobile','$address','$aadhar','$image','C',0,0)";

 $insert=mysqli_query($connect , $sql);
    
   
if($insert){
echo"
<script>
alert(' Registration Sucessfull ! ');
window.location='../AdminDashboard.php';

</script>


";
}
    
else{
    echo"
    <script>
    alert(' Registration UnSucessfull ||  Please Register here ! ');
    window.location='../AdminDashboard.php';
    
    </script>
    
    
    ";
}
    }













?>

