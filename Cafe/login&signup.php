<?php

    require "db.php";

// Form verilerini alın
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// SQL sorgusu
	$sql = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
		header("Location: wait.php");
		exit();
	} else {
		echo "Hata: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>


<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/login&signup.css">
	<link rel="stylesheet" type="text/css" href="css/login&signup.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="login&signup.php" method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" name="username" placeholder="User name" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button>Sign up</button>
			</form>
		</div>


		<div class="login">
			<form action="login.php" method="POST">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="pswd" placeholder="Password" required="">
				<button type="submit">Login</button>
			</form>
			<?php
			if (isset($error_message)) {
				echo "<p class='error'>$error_message</p>";
			}
			?>
		</div>


	</div>
</body>

</html>