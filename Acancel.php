<?php include("Aheader.html") ?>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='flight';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM schedule");
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>FALCON AIRLINE</title>
    <link rel="stylesheet" href="schedule.css">
</head>
 
<body>
    <section>
        <h2>DELETE FLIGHT</h2>
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
                <th>Economy Class</th>
                <th>Premium class</th>
                <th>Cancel</th>
            </tr>
</thead>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                $i=0;
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
                <td><a href="deleterecord.php?flycode=<?php echo $rows["flycode"]; ?>"><button class="editbtn">Remove</button></a></td>
            </tr>
                </tbody>
            <?php
            $i++;
                }
            ?>
        </table>
    </section>
</body>
</html>