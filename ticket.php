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
$source=$_POST['source'];
$destination=$_POST['destination'];
$myDate = date("d-m-y h:i:s");
$class=$_POST["class"];
$fares=$_POST["fares"];
$email = $_POST["email"];
$cardno=$_POST["card-number"];
$cardname=$_POST["card-holder-name"];
$expdate=$_POST["expiration-date"];
$cvv=$_POST["cvv"];
$sql="INSERT INTO `passenger`(`fname`, `mname`, `lname`, `gender`, `phone`,  `class`, `fares`, `email`,`card_no`, `card_name`, `exp_date`, `cvv`) values('$firstname','$middlename','$lastname','$Gender','$phone','$class','$fares','$email','$cardno','$cardname','$expdate','$cvv')";
// Create a new PDF document
$result=mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="ticket.css">
<div class="box">
  <ul class="left">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  
  <ul class="right">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="ticket">
    
    <span class="airline">Falcon Airline</span>
    <span class="airline airlineslip">Falcon Airline</span>
    <span class="boarding">Boarding pass</span>
    <div class="content">
     <span class="jfk"><?php echo $source ?></span>
      
      <span class="sfo"></span>
      
      <span class="jfk jfkslip"></span>
      <span class="plane planeslip"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50" width="50" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390"/><path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10"/></g></svg></span>
      <span class="sfo sfoslip"><?php echo $destination ?>  </span>
      <div class="sub-content">
        
        <span class="name">PASSENGER NAME<br><span><?php echo $firstname;?> <?php echo $middlename; ?> <?php echo $lastname; ?></span></span>
        <span class="flight">FLIGHT N&deg;<br><span>X3-65C3</span></span>
        <span class="gate">GATE<br><span>11B</span></span>
        <span class="seat">SEAT<br><span>45A</span></span>
        <span class="boardingtime">BOARDING TIME<br><span><?php echo $myDate ?></span></span>
            
         <span class="flight flightslip">FLIGHT N&deg;<br><span>X3-65C3</span></span>
          <span class="seat seatslip">SEAT<br><span>45A</span></span>
         <span class="name nameslip">PASSENGER NAME<br><span><?php echo $middlename ?></span></span>
      </div>
    </div>
    <div class="barcode"></div>
    <div class="barcode slip"></div>
  </div>
</div>