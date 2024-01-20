<?php
session_start();
$conn = mysqli_connect("localhost","root","","flight");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if(isset($_POST['login']))
{
    $query="SELECT * FROM `admin` WHERE username='$_POST[username]' AND password='$_POST[password]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['Adminloginid']=$_POST['username'];
        header("location: addfly.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('incorrect password');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Admin Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{ background-image: url('plane.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin: 700px;  
   
}

.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}

form{
    height: 520px;
    width: 400px;
    background-color:#D8BFD8;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: white;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color:black;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: black;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
.button{
    margin-top: 53px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 12px 0;
    display: flex;
    justify-content: center;
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    border-radius: 15px;
    cursor: pointer;
}
.button:hover{
  background-color:black;
  color:white;
  
}
.form .h4 {
    
    text-align: center;
    color:black;
}
.cont .btn{
    color:lightgreen;
}


    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>Login For Admin </h3>

        <label for="username" style="color:black">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username" required />

        <label for="password" style="color:black">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required />
        <button type="submit" name="login" class="button">Log in</button>
      
        
       
    </form>
</body>
</html>