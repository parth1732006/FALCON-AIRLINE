<!DOCTYPE html>
<html>
<head>
    <style>
    
.logout-button {
    background-color: #FF0000;
    color: #FFFFFF;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
}
 
</style>
</head>
<body>
    <header>
        <nav>
            <!-- Other navigation links -->
            <a href="logout.php" class="logout-button">Logout</a>
        </nav>
    </header>
    <!-- Other content of your page -->
</body>
</html>
<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: homepage.php");
exit();
?>
