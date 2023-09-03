<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVED</title>
    <link rel="stylesheet" href="res.css">
</head>
<body>
<header>
		<img src="images/logo2.png" alt="" width="auto" height="70">
		<nav>
			<ul>
				<li><a href="index.html" class="hover-underline-animation">Home</a></li>
				<li><a href="about.html" class="hover-underline-animation">About Us</a></li>
				<li><a href="menu.html" class="hover-underline-animation">Menu</a></li>
				<li><a href="reservation.html" class="hover-underline-animation">Reservation</a></li>
				<li><a href="delivery.html"class="hover-underline-animation">Cart</a></li>
			</ul>
		</nav>
	</header>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$time=$_POST["time"];
$size=$_POST["party-size"];
$spl= $_POST["special-requests"];
echo "Name: .$name";
?>
</body>
</html>


