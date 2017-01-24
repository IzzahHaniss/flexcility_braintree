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

<?php
error_reporting();

// Create connection
$con=mysqli_connect("localhost","root","","braintreeone");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	$f = $_POST['plan'];
  
	$sql = 
	"UPDATE akaun
	SET plan='$f'
	WHERE email='$email'";

	$result = mysqli_query($con,$sql);
 
header("Location:profile.php"); 
?>

	