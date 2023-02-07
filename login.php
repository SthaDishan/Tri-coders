<?php 
include 'signup.php';
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bhatbhatte');

$email = $_POST['email'];
$password = $_POST['password'];

$s = "SELECT * FROM signup WHERE email='$email' && password='$password'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	$_SESSION['email'] = $email;
 	header('location:main_page.html');
 }else{
 	header('location:login.html');
 }

 ?>