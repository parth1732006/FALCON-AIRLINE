<?php

$servername='localhost';
$username='root';
$password='';
$dbname='flight';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
  if($conn)
  {
$sql = "SELECT * FROM schedule WHERE flycode ='" . $_GET["flycode"] . "'";
$result = $conn->query($sql);

$conn->close();
  }
?>
<!DOCTYPE html>  
<html>    
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  
 
  background-image: url('Burj.jpg'); 
  background-repeat: no-repeat;
    background-position: center;  
    
    background-size: cover;
    margin: 100px;
}  
.container {  
    padding: 50px;
   
  background-color: #C0C0C0;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: White;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.btn {  
  background-color: rgb(229, 224, 223);  
  color: rgb(232, 24, 24);  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: 10;  
  text-decoration: none;
  color: black;
  cursor: pointer; 
  border-radius: 13px; 
  width: 9%;  
  opacity: 0.9;  
}  
.btn:hover {  
  opacity: 1; 
  background-color:black ; 
  color: white;
}  
</style>  
<link rel="stylesheet" href="schedule.css">
</head>  
<body>  

<form method="POST" action="ticket.php"> 
<section>
        <div class="table-wrapper">
    <table class="fl-table">
        <!-- TABLE CONSTRUCTION -->
        <thead>
            <tr>
                <th>Flight code</th>
                <th>Departure Time</th>
                <th>Departure Date</th>
                <th>From</th>
                <th>To</th>
                <th>Business Class</th>
                <th>Economy class</th>
                <th>Premium  class</th>
            </tr>
</thead>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {


            ?>
            <tbody>
            <tr>
                <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
               
                <td><?php echo $rows['flycode'];?></td>
                <td><?php echo $rows['dtime'];?></td>
                <td><?php echo $rows['ddate'];?></td>
                <td><?php echo $rows['source'];?></td>
                <td><?php echo $rows['destination'];?></td>
                <td><?php echo $rows['bclass'];?></td>
                <td><?php echo $rows['eclass'];?></td>
                <td><?php echo $rows['pclass'];?></td>
            </tr>
                </tbody>
            <?php
                }
            ?>
        </table>
    </section>
  <div class="container">  
  <center>  <h1>Ticket Reservation</h1> </center>  
  <hr>  
  <label><b> Firstname </b></label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
<label><b> Middlename: </b></label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required />   
<label><b> Lastname: </b></label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />   
<div>  
 
<div>  
<label>   
<b>Gender :</b>  
</label><br>  
<input type="radio" value="Male" name="gender" > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
 <br><br> 

<label>   
<b>Phone :</b>  
</label>   
<input type="text" name="phone" placeholder="phone no." value="+91" size="10" required>   
<div>  
<label><b> Source: </b></label>    
<input type="text" name="source" placeholder="Source" value="" size="15" required /> 
<label><b> Destination: </b></label>    
<input type="text" name="destination" placeholder="Destination" size="15" required /> 
<label><b>   
Travel Class:
</b>  
</label>   
  
<select name="class">  
<option value="-Select-">-Select-</option>  
<option value="Business class">Business class</option>  
<option value="Economy class">Economy class</option>
<option value="Premium class">Premium class</option>  
</select>  
</div>  
    <div>  
        <label><b>  
        Select A Fare Type:
      </b>
        </label>   
          
        <select name="fares">  
        <option value="-Select-">-Select-</option>  
        <option value="Armed Forces Fares">Armed Forces Fares</option>  
        <option value="Students Fares">Students Fares</option>
        <option value="Senior Citizens Fares">Senior Citizens Fares</option>
        <option value="Doctor & Nurses Fares">Doctor & Nurses Fares</option>
        <option value="Double Seat Fares">Double Seat Fares</option>  
        </select>  
        </div>  
<div>   

 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required> 
 </div> 
 <hr><center>  <h1>Payment</h1> </center><hr>   
  <div class="form-group">
<label for="card-number">Card Number:</label>
<input type="text" name="card-number" id="card-number" class="form-control" placeholder="0000-xxxx-xxxx-xxxx" / required >
</div>
<div class="form-group">
<label for="card-holder-name">Card Holder Name:</label>
<input type="text" name="card-holder-name" id="card-holder-name" class="form-control" placeholder="card name" / required>
</div>
<div class="form-group">
<label for="expiration-date">Expiration Date:</label>
<input type="text" name="expiration-date" id="expiration-date" class="form-control" placeholder="01/23" / required>
</div>
<div class="form-group">
<label for="cvv">CVV:</label>
<input type="text" name="cvv" id="cvv" class="form-control" placeholder="CCV/CVC/CVS/CVV" / required>
<br><br>
<button type="submit" name="book" class="btn">book</button>
</div>
</form>  
</body>  
</html>
