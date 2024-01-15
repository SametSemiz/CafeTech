<?php


session_start(); // Oturumu başlat
 $message = "You must be logged in to order.";


// 3 saniye sonra index.php sayfasına yönlendir
header("refresh:5; url=login&signup.php");

// HTML sayfasını oluştur
?>
<!DOCTYPE html>
<html>

<head>
	<title>CafeTech</title>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Jost', sans-serif;
			text-align: center;
			margin-top: 100px;
		}
	</style>
</head>

<body>
	<h2><?php echo $message; ?></h2>
	<p>You are redirected to the login page in 5 seconds...</p>
</body>

</html>
