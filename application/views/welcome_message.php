<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>WELCOME TEST RUMAH WEB 2022</h2></center>
  <hr/>
  <?php echo validation_errors(); ?>
	<?php echo form_open('welcome/login'); ?>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" name="password">
    </div>
   <br/>
    <!--a href="<?= site_url('welcome/register') ?>">Create New Account ? Register Now</a--><br/><br/>
    <button type="submit" class="btn btn-success">LOGIN</button>
    
</div>

</body>
</html>

