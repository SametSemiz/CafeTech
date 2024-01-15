<?php
    require "db.php";
  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Banka Hesapları</title>
  <link rel="stylesheet" href="css/footer.css" />
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .banka-bilgisi {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        h2 {
            margin: 0 0 10px;
            color: #333;
            font-size: 20px;
        }

        p {
            margin: 0;
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container">
        <img style="width: 50px; margin: 0 0 0 45%;" src="images/check.png" />
        <br>
        <p style="text-align: center;">Congratulations<br>
            Your order has been successfully created<br>
            Your order will be delivered after you send the required fee to the iban information below.<br>
            Do not forget to write your name, surname, email in the description!</p><br>
            <a href="index.php"><img style="width: 140px; margin: 0 0 20px 37%; cursor: pointer;" src="images/returnhomepage.png" /></a>
        <?php
        // Banka hesaplarını sorgula
        $sql = "SELECT * FROM bank_accounts";
        $result = $conn->query($sql);

        // Sonuçları döngüyle işle
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Banka bilgilerini al
                $bankName = $row["bank_name"];
                $bankCity = $row["bank_city"];
                $bankCountry = $row["bank_country"];
                $branchName = $row["branch_name"];
                $branchCode = $row["branch_code"];
                $currency = $row["currency"];
                $accountHolder = $row["account_holder"];
                $accountNumber = $row["account_number"];
                $iban = $row["iban"];

                // Banka bilgilerini div olarak ekrana yazdır
                echo "<div class='banka-bilgisi'>";
                echo "<h2>$bankName</h2>";
                echo "<p>Şehir: $bankCity</p>";
                echo "<p>Ülke: $bankCountry</p>";
                echo "<p>Şube Adı: $branchName</p>";
                echo "<p>Şube Kodu: $branchCode</p>";
                echo "<p>Para Birimi: $currency</p>";
                echo "<p>Hesap Sahibi: $accountHolder</p>";
                echo "<p>Hesap Numarası: $accountNumber</p>";
                echo "<p>IBAN: $iban</p>";
                echo "</div>";
            }
        } else {
            echo "Hiç banka hesabı bulunamadı.";
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
        ?>
    </div>
    
</body>

</html>