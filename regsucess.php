<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success pages</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Registration Successful</h2>
 
        <h3>Dear <?php echo $_SESSION["first_name"];?>, </h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for registering with us. We have sent an activation link to <?php echo  $_SESSION["email"];?>.
Please check your mail and activate your acount.</p>
        <a href="https://tukoolbetinsurance.com" class="btn btn-success">Back to Page </a>
    <br><br>
        </div>
        
	</div>
</div>
</body>
</html>
