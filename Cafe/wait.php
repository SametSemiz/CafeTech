<?php


session_start(); // Oturumu başlat
 $message = "Registration Successful!";


// 3 saniye sonra index.php sayfasına yönlendir
header("refresh:3; url=index.php");

// HTML sayfasını oluştur
?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration Successful</title>
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
	<p>You are redirected to the home page in 3 seconds...</p>
</body>

</html>
