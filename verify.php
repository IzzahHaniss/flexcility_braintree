<?php
//error_reporting(0);
session_start();
		
// username and password sent from form 
$email = $_POST['email']; 
$password = $_POST['password'];
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

// Create connection
$con=mysqli_connect("localhost","root","","braintreeone");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM akaun WHERE email='$email' and password='$password'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
$_SESSION['email']=$email;
$_SESSION['password']=$password;

echo "<script>alert('Success!');document.location.href = 'home.php';</script>";
}
else {
echo "<script>alert('Invalid email and password.');document.location.href='login.php';</script>";
}

?>