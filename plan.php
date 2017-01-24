<html> 
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
<body>
<center><h3 class="margin">Register Now</h3>
  <form action="save_plan.php" method="post">
    
   
     <div class="form-group">
      <label class="sr-only" for="pwd">Password:</label>
      <input type="text" class="form-control" name="plan" value="basic2">
    </div>

    
	<br>
	
	<br>
    <button type="submit" class="btn btn-success waves-effect">Submit</button>
  </form></center>
  </body>
  </html>