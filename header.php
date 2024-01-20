<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="header.css">
</head>

<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">FALCON AIRLINE</div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <div class="menu">
        <li><a href="dest.php">Search</a></li>
        <li><a href="submit.php">Schedule</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><?php  
          if(isset($_SESSION['user_info'])){
            echo $_SESSION['user_info'];
            echo '<li><a href="logout.php">Logout</a></li>';
          }
          else
            echo '<A HREF="register.php">Login/Register</A>';
          ?></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="About.php">About Us</a></li>
      </div>
    </ul>
  </nav>
</body>

</html>