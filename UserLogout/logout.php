<?php
session_start();

session_destroy();

echo"<script>
alert('You Are Suceesfully Logged Out !');
window.location='../index.html';


</script>";


?>