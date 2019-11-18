<?php
session_start();
$con=mysqli_connect("localhost","root","","users");
$link = mysqli_connect("localhost", "root", "", "trains");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$uname = $_SESSION['uname'];
$name = $_POST['trname'];
$number = $_POST['number'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$time = $_POST['time'];
$count = $_POST['count'];
$coach = $_POST['coach'];

// Perform queries
mysqli_query($con,"INSERT INTO bookings (`username`, `trainname`, `trainnumber`, `source`, `destination`, `time`) VALUES ('$uname', '$name','$number', '$source', '$destination', '$time')");
mysqli_query($link,"UPDATE seatmatrix SET `Available` = `Available` - '".$count."' WHERE `TrainName` = '".$name."' AND `Coach` = '".$coach."'");

mysqli_close($con);
?>

