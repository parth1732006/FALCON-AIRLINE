<?php
$servername='localhost';
$username='root';
$password='';
$dbname='flight';
$conn=mysqli_connect($servername,$username,$password,$dbname);
$firstname  = $_POST['firstname'];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$Gender=$_POST["gender"];
$phone = $_POST["phone"];
$address=$_POST["address"];
$class=$_POST["class"];
$fares=$_POST["fares"];
$email = $_POST["email"];
$cardno=$_POST["card-number"];
$cardname=$_POST["card-holder-name"];
$expdate=$_POST["expiration-date"];
$cvv=$_POST["cvv"];
$sql="INSERT INTO `passenger`(`fname`, `mname`, `lname`, `gender`, `phone`, `address`, `class`, `fares`, `email`,`card_no`, `card_name`, `exp_date`, `cvv`) values('$firstname','$middlename','$lastname','$Gender','$phone','$address','$class','$fares','$email','$cardno','$cardname','$expdate','$cvv')";
// Create a new PDF document
$result=mysqli_query($conn,$sql);
?>