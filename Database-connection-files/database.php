
<?php
include('connection.php');

$fullname =$_POST['fullname'];
$fathername =$_POST['fathername'];
$email=$_POST['email'];
$username=$_POST['username'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];
$aadhar =$_POST['aadhar'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address =$_POST['address'];
$states=$_POST['states'];
$city =$_POST['city'];
$pincode =$_POST['pincode'];
$age =$_POST['age'];
$image =$_FILES['photo'] ['name'];
$tmp_name = $_FILES['photo'] ['tmp_name'];
$user_type =$_POST['user'];



$check_username_database=mysqli_query( $connect,"SELECT * FROM login WHERE username= '$username' ");
$username_match=mysqli_num_rows($check_username_database);

if($username_match){

    echo"
    <script>
    alert(' This Username Already Available Please Choose Other Username ! ');
    window.location= '../Register/register.html';
    
    </script>
    
    
    ";
}
else{

    $check_aadhar_database=mysqli_query( $connect,"SELECT * FROM login WHERE aadhar= '$aadhar' ");
    $aadhar_num_match=mysqli_num_rows($check_aadhar_database);

if($aadhar_num_match){
    echo"
    <script>
    alert(' User Already Registered ! Duplicate Entry Not Allowed  ');
    window.location='../Register/register.html';
    
    </script>
    
    
    ";
}

else{
if($password == $cpassword){
move_uploaded_file($tmp_name ,"../uploads/$image");
$sql="INSERT INTO login( fullname , fathername, email, username, password, aadhar, mobile, dob, gender, address, state, city, pincode, age, image, usertype, status, votes) 
VALUES ('$fullname', '$fathername', '$email', '$username', '$password', '$aadhar', '$mobile', '$dob',  '$gender',  '$address',  '$states',  '$city',  '$pincode',  '$age','$image','$user_type',0,0)";

$insert=mysqli_query($connect , $sql);

if($insert){
    

    
echo"
<script>
alert(' Sucessfully Registered ! ');
window.location='../Login/login.aspx';

</script>


";
}


}


else{

    echo"
    <script>
    alert(' Password And Conform Password Does Not Match ! ');
    window.location='../Register/register.html';
    
    </script>
    ";

}


}

}


?>
