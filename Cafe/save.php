<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form verilerini al
    if(isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    }
    if(isset($_POST['last_name'])){
        $last_name = $_POST['last_name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }
    
    require "db.php";

    // Verileri veritabanına ekle
    $sql = "INSERT INTO save (first_name, last_name, email, phone, address, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$message')";
    if ($conn->query($sql) === TRUE) {
        header("Location: bankaccounts.php");
    exit();
    } else {
        echo "eRROR: " . $sql . "<br>" . $conn->error;
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
}
?>
