<!DOCTYPE html>
<html>
<head>
<title>Payment Module</title>
<link rel="stylesheet" href="payment.css">
</head>
<body>
<div class="container">
<h1>Payment Module</h1>
<form action="id.php" method="post">
<div class="form-group">
<label for="card-number">Card Number:</label>
<input type="text" name="card-number" id="card-number" class="form-control" placeholder="0000-xxxx-xxxx-xxxx" >
</div>
<div class="form-group">
<label for="card-holder-name">Card Holder Name:</label>
<input type="text" name="card-holder-name" id="card-holder-name" class="form-control" placeholder="card name">
</div>
<div class="form-group">
<label for="expiration-date">Expiration Date:</label>
<input type="text" name="expiration-date" id="expiration-date" class="form-control" placeholder="01/23">
</div>
<div class="form-group">
<label for="cvv">CVV:</label>
<input type="text" name="cvv" id="cvv" class="form-control" placeholder="CCV/CVC/CVS/CVV">
</div>
<input type="submit" value="Pay" class="btn btn-primary">
</form>
</div>
</body>
</html>