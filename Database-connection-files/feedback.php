<?php

include("connection.php");     

$name =$_POST['name'];
$email=$_POST['email'];
$country =$_POST['country'];
$subject=$_POST['subject'];



$sql="INSERT INTO feedback(NAME,EMAIL,COUNTRY,SUBJECT) VALUES('$name','$email','$country','$subject')";


$feed_back=mysqli_query( $connect, $sql);

if($feed_back != 0){
    echo"
<script>
alert('Thank You ! Send Your Feedback. ');
window.location='../index.html';

</script>


";
}
else{
    echo"
    <script>
    alert('Fill Proper Details ! ');
    window.location='../index.html';
    
    </script>
    
    
    "; 
}













?>