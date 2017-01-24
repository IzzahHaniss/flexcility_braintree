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
      color: #ffffff;
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
$e = $data['status'];
$f = $data['plan'];
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

<!-- Second Container -->

<div class="container-fluid bg-2 text-center">
  <h2 class="margin"><?php echo($a);?>'s Profile</h2>
  <table cellspacing="10" height="50%" width="20%" align="center">

<tr>
<td>Username : </td> 
<td><em><?php echo $a;?></em></td>
</tr>
  
<tr>
<td>Company : </td> 
<td><em><?php echo $b;?></em></td>
</tr>  
 
<tr>
<td>Status:</td>
<td><em><?php echo $e;?></em></td>
</tr>

<tr>
<td>Plan:</td>
<td><em><?php echo $f;?></em></td>
</tr>

</table>

<a href="plan.php">PLAN</a>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
 <p>Flexcility CMMS BrainTree <a href="http://www.flexcility.com">www.flexcility.com</a></p> 
</footer>

</body>
</html>
