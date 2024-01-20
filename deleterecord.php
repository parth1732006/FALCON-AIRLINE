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
$sql = "DELETE FROM schedule WHERE flycode ='" . $_GET["flycode"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location:Acancel.php');
}
mysqli_close($conn);
  }
?>