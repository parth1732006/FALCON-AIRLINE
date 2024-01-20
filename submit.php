
<?php include("header.php") ?>
<?php
$user = 'root';
$password = '';
$database = 'flight';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
$sql = " SELECT * FROM schedule ";
$result = $mysqli->query($sql);
$mysqli->close();
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
        <h2>FLIGHT SCHEDULE</h2>
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
                <td><a href="reserve.php?flycode=<?php echo $rows["flycode"]; ?>"><button class="editbtn" name="submit">Reserve</button></a></td>
            </tr>
                </tbody>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>