<?php
session_start();
$con=mysqli_connect("localhost","root","","users");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$uname = $_SESSION['uname'];
$name = $_POST['trname'];
$number = $_POST['number'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$time = $_POST['time'];

// Perform queries
mysqli_query($con,"INSERT INTO bookings (`username`, `trainname`, `trainnumber`, `source`, `destination`, `time`) VALUES ('$uname', '$name','$number', '$source', '$destination', '$time')");

mysqli_close($con);
?>

