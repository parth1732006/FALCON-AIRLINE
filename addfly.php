<!DOCTYPE html>
<html>
<head>
  

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style type="text/css">
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color:#4793E3 ;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
  </head>
  <body>
    <?php include("Aheader.html") ?>
    <form action="adfly.php" method="POST">
    <div class="container">
      <h1>ADD FLIGHT</h1>
      <hr>
      <label><b> Flight Code: </b></label>   
      <input type="text" name="flycode" placeholder= "ABC-XXX" required />   
      <label><b> Departure Time: </b></label>   
      <input type="time" name="dtime" placeholder="" required />
      <div>  
      <label><b> Departure Date: </b></label>    
      <input type="date" name="ddate" placeholder="DD/MM/YYYY" required />   
      <div>  
      <label><b> From: </b></label>    
      <input type="text" name="source" placeholder="From" required /> 
      <label><b> To: </b></label>    
      <input type="text" name="destination" placeholder="To" required />
      <label><b> Business class: </b></label>
      <input type="number" name="bclass" required/>
      <label><b> Economy class: </b></label>
      <input type="number" name="eclass" required/>
      <label><b> Premium class: </b></label>
      <input type="number" name="pclass" required/>
      <button type="submit" class="registerbtn" name="add">ADD FLIGHT</button>
    </div>
  </form>
</body>
</html>
