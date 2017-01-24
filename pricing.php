<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Flexcility BrainTree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: black;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
	echo "You have to log in to be able to view this page.";
	echo "<meta http-equiv='Refresh' content='3;login_user.php'>";
	die();
} 

$email = $_SESSION['email'];
$db = mysql_connect("localhost","root","");
mysql_select_db("braintreeone",$db);
$table = mysql_query("SELECT * FROM akaun where email='$email'");
if ($data = mysql_fetch_array($table))
{
	//$customerID = $data['customerID'];
$a = $data['username'];
$b = $data['company'];
$c = $data['email'];
$d = $data['password'];
}


?>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">FLEXCILITY SYSTEMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-1 text-center">    
 <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <br>
  <div class="row">
  <form action="save_plan.php" method="post">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
		  <input type="hidden" class="form-control" name="plan" value="Basic">
        </div>
        <div class="panel-body">
          <p><strong>User</strong> up to 5</p>
          <p><strong>Module</strong> 5/5*</p>
          <p><strong>Storage</strong> Unlimited</p>
          <p><strong>Update</strong> Yes</p>
		  <p><strong>Upgrade</strong> Yes</p>
		  <p><strong>*Contractor</strong> RM800</p>
		  <p>per vendor (annually) </p>
        </div>
        <div class="panel-footer">
          <h3>RM299</h3>
          <h4>per user</h4>
          <button type="submit" class="btn btn-lg">Get Plan</button>
        </div>
      </div> 
    </div> 
	</form>
	
	<form action="save_plan.php" method="post">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
		  <input type="hidden" class="form-control" name="plan" value="Pro">
        </div>
        <div class="panel-body">
          <p><strong>User</strong> up to 20</p>
          <p><strong>Module</strong> 5/5*</p>
          <p><strong>Storage</strong> Unlimited</p>
          <p><strong>Update</strong> Yes</p>
		  <p><strong>Upgrade</strong> Yes</p>
		  <p><strong>*Contractor</strong> RM800</p>
		  <p>per vendor (annually) </p>
        </div>
        <div class="panel-footer">
          <h3>RM249</h3>
          <h4>per user</h4>
          <button type="submit" class="btn btn-lg">Get Plan</button>
        </div>
      </div> 
    </div>
	</form>	
	
	
	<form action="save_plan.php" method="post">
	<div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
		   <input type="hidden" name="plan" value="Premium">
        </div>
        <div class="panel-body">
          <p><strong>User</strong> More than 20</p>
          <p><strong>Module</strong> 5/5*</p>
          <p><strong>Storage</strong> Unlimited</p>
          <p><strong>Update</strong> Yes</p>
		  <p><strong>Upgrade</strong> Yes</p>
		  <p><strong>*Contractor</strong> RM800</p>
		  <p>per vendor (annually) </p>
        </div>
        <div class="panel-footer">
          <h3>RM199</h3>
          <h4>per user</h4>
          <button type="submit" class="btn btn-lg">Get Plan</button>
        </div>
      </div> 
    </div> 
	</form>
  </div>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid bg-2 text-center">
  <h2>MODULES</h2>
  <h4>*modules provided + <em>contractor</em></h4>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-off"></span>
      <h4>WORK REQUEST</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-certificate"></span>
      <h4>WORK ORDER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-lock"></span>
      <h4>ASSET</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-wrench"></span>
      <h4>TENANT</h4>
      <p>Lorem ipsum dolor sit amet..</p>
     </div>
	 </div>
  </div>
  
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Flexcility CMMS BrainTree <a href="http://www.flexcility.com">www.flexcility.com</a></p> 
</footer>

</body>
</html>
