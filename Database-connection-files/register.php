<?php

//  error_reporting(0);
include("connection.php");

$name =$_POST['name'];
$mobile =$_POST['number'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];
$address =$_POST['address'];
$aadhar =$_POST['aadhar'];
$image =$_FILES['photo'] ['name'];
$tmp_name = $_FILES['photo'] ['tmp_name'];
$user_type =$_POST['user'];








$check_aadhar="SELECT * FROM register WHERE aadhar='$aadhar'";
$data_check=mysqli_query($connect,$check_aadhar);
$same_value=mysqli_num_rows($data_check);


if($same_value>0){
    echo"
    <script>
    alert(' User Already Registered ! Duplicate Entry Not Allowed  ');
    window.location='../Registration/Registration.aspx';
    
    </script>
    
    
    ";
}

else{


if($password == $cpassword)

{
 move_uploaded_file($tmp_name ,"../uploads/$image");

 $sql="INSERT INTO register(name , mobile, password, address, aadhar, image, user, status, votes) 
 VALUES('$name','$mobile','$password','$address','$aadhar','$image','$user_type',0,0)";

 $insert=mysqli_query($connect , $sql);
    
   
if($insert){
    if($user_type == 'A'){

    
echo"
<script>
alert(' Admin Sucessfully Registered ! ');
window.location='../Login/login.aspx';

</script>


";
}
else{
    echo"
    <script>
    alert(' Voter Sucessfully Registered ! ');
    window.location='../Login/login.aspx';
    
    </script>
    
    
    ";
}
}
    
else{
    echo"
    <script>
    alert(' Registration UnSucessfull ||  Please Register here ! ');
    window.location='../Registration/Registration.aspx';
    
    </script>
    
    
    ";
}
    }


else{
    echo"
    <script>
    alert(' Password And Conform Password Does Not Match ! ');
    window.location='../Registration/Registration.aspx';
    
    </script>
    ";

}

}









?>