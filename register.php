<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  
 
  background-image: url('flight.jpg'); 
  background-repeat: no-repeat;
    background-position: center;
    
    background-size: cover;
    margin: 100px;
}  
.container {  
    padding: 50px;
   
  background-color:  rgb(63, 216, 243);  
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
</head>  
<body>  
<form action="login.php" method="POST">  
  <div class="container">  
  <center>  <h1>Registration</h1> </center>  
  <hr>  
  <label><b> Firstname </b></label>   
<input type="text" placeholder="firstname" name= "firstname" size="15" required />   
<label><b> Middlename: </b></label>   
<input type="text" name="middlename" placeholder="middlename" size="15" required />   
<label><b> Lastname: </b></label>    
<input type="text" name="lastname" placeholder="lastname" size="15"required />   
<div>  
 
<div>  
<label>   
<b>Gender :</b>  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
 <br><br> 

<label>   
<b>Phone :</b>  
</label>  
<input type="text" name="phone" placeholder="phone no." size="10" required/>    
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="cpsw" required>       
    <p><b>By creating an account you agree to our </b><a href="#">Terms & Privacy</a>.</p>
    <br><br>

    <button class="btn" name="submit">Register</button> 
  </div>  
     
</form>  
</body>  
</html>