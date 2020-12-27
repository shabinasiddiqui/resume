<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";
$con = mysqli_connect($servername,$username,$password,$dbname);

$name=$_POST['username'];
$number=$_POST['number'];
$email=$_POST['email'];
$msg = $_POST['message'];
$query = "INSERT INTO contact (username,phone,email,password) VALUES ('$name',$number,'$email','$msg')";
mysqli_query($con,$query);          
?>