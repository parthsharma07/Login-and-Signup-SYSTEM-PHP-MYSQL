<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: loginpage.html');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
		}
		a:link {
  text-decoration: none;
}
	</style>
</head>
<body style="background-image:url(homepage.jpg);background-size: cover;padding: 0;">
	<div style="background-color: black; opacity: 0.7; padding-top: 20px;padding-bottom: 20px;margin-top: 10px;width: 100%;height: 40px;">
		<p style="color: white;font-size: 20px; margin-left: 30px;margin-top: 10px;">TRAVELEXPRESS TRAIN RESERVATION FACILITIES</p>
		<a href="loginpage.html"><strong><p style="color: white;margin-left: 1300px;margin-top: -22px;font-size: 20px;"><strong>Login</strong></p></strong></a>
		<a href="newaccount.html"><strong><p style="color: white;margin-left: 1400px;margin-top: -24px;font-size: 20px;"><strong>SignUp</strong></p></strong></a>
	</div>
	<div style="background-color: white;opacity: 0.7;padding-top: 10px;padding-bottom: 13px;margin-top: 2px;width: 100%;height: 30px;">
		<a href=""><strong><p style="color: black;margin-left: 30px;margin-top: 9px;font-size: 18px;">Home</p></strong></a>
		<a href=""><strong><p style="color: black;margin-left: 110px;margin-top: -21px;font-size: 18px;">Your Bookings</p></strong></a>
		<a href=""><strong><p style="color: black;margin-left: 250px;margin-top: -20px;font-size: 18px;">About Us</p></strong></a>
		<a href=""><strong><p style="color: black;margin-left: 350px;margin-top: -20px;font-size: 18px;">Contact</p></strong></a>
	</div>
	<strong><p style="font-size: 80px;font-family: arial;color: white;opacity: 0.7;margin-top: 180px;margin-left: 100px;font-stretch: 8px;">THE BEST WAY<br>TO GET AWAY</p></strong>
	<div style="background-color: black;margin-bottom: 100px; opacity: 0.7; padding-top: 40px;padding-bottom: 20px;margin-top: -200px;margin-left: 850px;width: 35%;height: 300px;">
		<p style="color: white;opacity: 0.9;font-size: 25px;margin-top: -20px;margin-left: 15px;">Route</p>
		<select style="border-radius: 5px;width: 40%;height: 40px;background-color: white;opacity: 0.8;font-size: 20px; margin-left: 15px;margin-top: 5px;color: black;" id = "myList">

<option style="color: black;font-size: 15px;" value = "From" disabled selected>From</option>

<option style="color: black;font-size: 15px;" value = "1">Madhya Pradesh</option>

<option style="color: black;font-size: 15px;" value = "2">Maharashtra</option>

<option style="color: black;font-size: 15px;" value = "3">Goa</option>

<option style="color: black;font-size: 15px;" value = "4">Punjab</option>

<option style="color: black;font-size: 15px;" value = "5">Haryana</option>

<option style="color: black;font-size: 15px;" value = "6">Bihar</option>
</select>

		<select style="border-radius: 5px;width: 40%;height: 40px;background-color: white;opacity: 0.8;font-size: 20px; margin-left: 70px;margin-top: -14px;color: black;" id = "myList">

<option style="color: black;font-size: 15px;" value = "To" disabled selected>To</option>

<option style="color: black;font-size: 15px;" value = "1">Madhya Pradesh</option>

<option style="color: black;font-size: 15px;" value = "2">Maharashtra</option>

<option style="color: black;font-size: 15px;" value = "3">Goa</option>

<option style="color: black;font-size: 15px;" value = "4">Punjab</option>

<option style="color: black;font-size: 15px;" value = "5">Haryana</option>

<option style="color: black;font-size: 15px;" value = "6">Bihar</option>
</select>

		<p style="color: white;opacity: 0.9;font-size: 25px;margin-top: 15px;margin-left: 15px;">Travelling Date</p>
		<input style="border-radius: 5px;width: 40%;height: 40px;background-color: white;opacity: 0.8;font-size: 20px; margin-left: 15px;margin-top: 5px;color: black;" type="Date" name="travel date" placeholder="Date">

		<p style="color: white;opacity: 0.9;font-size: 25px;margin-top: 15px;margin-left: 15px;">Travelling Persons</p>
		<select style="border-radius: 5px;width: 40%;height: 40px;background-color: white;opacity: 0.8;font-size: 20px; margin-left: 15px;margin-top: 5px;color: black;" id = "myList">

<option style="color: black;font-size: 15px;" value = "Adults" disabled selected>Adults</option>

<option style="color: black;font-size: 15px;" value = "1">1</option>

<option style="color: black;font-size: 15px;" value = "2">2</option>

<option style="color: black;font-size: 15px;" value = "3">3</option>

<option style="color: black;font-size: 15px;" value = "4">4</option>

<option style="color: black;font-size: 15px;" value = "5">5</option>

<option style="color: black;font-size: 15px;" value = "6">6</option>
</select>

		<select style="border-radius: 5px;width: 40%;height: 40px;background-color: white;opacity: 0.8;font-size: 20px; margin-left: 70px;margin-top: -14px;color: black;" id = "myList">

<option style="color: black;font-size: 15px;" value = "Kids" disabled selected>Kids</option>

<option style="color: black;font-size: 15px;" value = "1">1</option>

<option style="color: black;font-size: 15px;" value = "2">2</option>

<option style="color: black;font-size: 15px;" value = "3">3</option>

<option style="color: black;font-size: 15px;" value = "4">4</option>

<option style="color: black;font-size: 15px;" value = "5">5</option>

<option style="color: black;font-size: 15px;" value = "6">6</option>
</select>

		<center><input type="button" name="view trains" value="View Trains" style="border-radius: 5px;width: 40%;height: 40px;background-color: orange;opacity: 0.8;font-size: 20px; margin-top: 25px;color: black;" onclick=""></center>
	</div>
</body>
</html>