<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  

<link rel="stylesheet" href="schedule.css">
<style>  
body{  
  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: url('air4.jpeg'); 
  background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

}  

  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 10px;  
  margin: 5px 0 10px 0;  
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
.searchbtn {  
  background-color: rgb(229, 224, 223);  
  color: rgb(0, 0, 0);  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: 10;  
  cursor: pointer;  
  width: 9%;  
  opacity: 0.9;  
}  
.searchbtn:hover {  
  opacity: 1; 
  background-color:black ; 
  color: white;
}  
h1{
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 10px 0;
}
</style>  
</head>  
<body>  
  <?php include("header.php")?>
<form method="POST">  
  <div class="container" style="margin: 100px;">
    <h1><b>Select Destination</b></h1>  
  
  <hr>  
  <label><b> From: </b></label>   
<input type="text" name="from" placeholder= "" size="20"  />   
<label><b> To: </b></label>   
<input type="text" name="to" placeholder="" size="20"  />  
<button type="Search" class="searchbtn" name="Find">Find</button>
</form>  
</body>  
</html>
<?php
if(isset($_POST['Find']))
{
$con= mysqli_connect("localhost","root","");
if ($con)
{
mysqli_select_db($con, "flight"); 
$from=$_POST['from'];
$to=$_POST['to'];
$result = mysqli_query($con, "SELECT * FROM schedule WHERE source LIKE '%$from%' AND destination LIKE '%$to%'" );
if(mysqli_num_rows($result)>0)
{
    ?>
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
                <th>Book</th>
            </tr>
</thead>
<?php
while($rows = mysqli_fetch_array($result))
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
                <td><a class="editbtn" href="reserve.php?flycode=<?php echo $rows["flycode"]; ?>">Reserve</button></a>
            </tr>
                </tbody>
<?php
}
}
else
{
echo "<font color='black'>No matching record find</font>";

}

}

mysqli_close($con);
}
?>

