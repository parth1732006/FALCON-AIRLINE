<html>
    <head>
        <style>
  body{
    background-color:#8FBC8F
  }
  .container{
    width:80%;
    margin:50px auto;
  }
  .contact-box{
    background:#fff ;
    display: flex;
  }
  .contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
  }
  .contact-right{
    flex-basis: 40%;
    padding: 40px;
    background: #1c00b5 ;
    color: white;
  }
  h1{
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
    font-family: Georgia, serif;
}
.container p{
margin-bottom : 40px;
}
.input-row{ display: flex; justify-content: space-between; margin-bottom: 20px;
}
.input-row .input-group{ flex-basis: 45%;
}
input{
border: none;
width: 100%; border-bottom: 1px solid #ccc; outline: none;
padding-bottom: 5px;

}
textarea{
width: 100%;
border: 1px solid #ccc;
outline: none;
padding: 10px;
box-sizing: border-box;
}
Label{
margin-bottom: 6px; display: block;
color: #1c00b5;
}
button {
  background: #1c00b5;
width: 100px;
border: none;
outline: none;
color: #fff;
height: 35px;
border-radius: 30px;
margin-top: 20px;
box-shadow: @px 5px 15px 0px rgba(28,0,181,0.3);
}
.contact-left h3{
color: #1c00b5;
}
.contact-left h3{
  color:#1c00b5;
  font-weight:600;
  margin-bottom:30px;
}
.contact-right h3{
  font-weight:600;
  margin-bottom:30px;
}
tr td:first-child{
  padding-right:20px;
}
tr td{
  padding-top:20px;
}
   
        </style>
    </head>
<body>
<?php include("header.php") ?>
<div class="container">
<h1>CONTACT US</h1>
<div class="contact-box">
<div class="contact-left">
<h3>Sent your request</h3>
<form method="POST">
<div class="input-row"> <div class="input-group">
<label>Name</label>
<input type="text" name="name" placeholder="Bob Marley">
</div>
<div class="input-group">
<label>Phone</label>
<input type="text" name="phone" placeholder="+91 256 541 2200">
</div>
</div>
<div class="input-row"> <div class="input-group">
<label>Email</label>
<input type="email" name="email" placeholder="abc@gmail.com">
</div>
<div class="input-group">
<label>Subject</label>
<input type="text" name="subject" placeholder="Product demo">
</div>
</div>
<label>Message</label>
<textarea rows="5" name="message" placeholder="Your Message"></textarea>
<button type="submit" name="send">SEND</button>
</form>
</div>
<div class="contact-right">
<h3>Reach us</h3>
<table style="color:white">
  <tr>
    <td>Email</td>
    <td>contactus@gmail.com</td>
 </tr>
 <tr>
    <td>Phone</td>
    <td>+91 1234567890</td>
 </tr>
 <tr>
    <td>Address</td>
    <td>Street: 2, Arihant Super Market,<br>
        Opp State Bank Of India Lalbag Rd,<br>
        City: Vadodara<br>
        State: Gujarat</td>
 </tr>
</table>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['send']))
{
  $conn=mysqli_connect("localhost","root","","flight");
  if($conn)
  {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $req="INSERT INTO contact values ('$name','$phone','$email','$subject','$message')";
    if(mysqli_query($conn,$req))
    {
      header('location:contact.php');
    }
    mysqli_close($conn);
  }
}
?>