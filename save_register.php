<?php
error_reporting();
// Create connection
$con=mysqli_connect("localhost","root","","braintreeone");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$a = $_POST['username'];
$b = $_POST['company'];
$c = $_POST['email']; 
$d = $_POST['password'];

$sql = "INSERT INTO akaun(username,company,email,password) 

		VALUES ('$a','$b','$c','$d')";

$result = mysqli_query($con,$sql);

echo "<script>alert('Successfully registered! Please LOGIN to continue. TQ!')
;document.location.href = 'login.php';</script>";
?>
