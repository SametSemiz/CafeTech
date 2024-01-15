<?php
// login.php

session_start();
$login = 0;

    require "db.php";

// Form verilerini alın
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["pswd"];

	// SQL sorgusu
	$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
        $login = 1;
        $_SESSION["login"] = $login;
        header("Location: index.php");
	} else {
        $login = 0;
        $_SESSION["login"] = $login;
        header("Location: login&signup2.php");
	}
}

$conn->close();
