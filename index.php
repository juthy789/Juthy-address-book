<?php 

session_start();


if(isset($_SESSION["username"]))
header("location: home.php");

else


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<center>
    <div style="color: white;background-color: blue;">
<h1>Welcome to AddressBook</h1>
</div>
</center>
<div class="container">

<p style="margin-top: 50px">Already a member ? Please  <a href="login.html">LOGIN</a><br> Or not yet a member? Please  <a href="registration.html">REGISTER</a> 
</div>
</body>
</html>