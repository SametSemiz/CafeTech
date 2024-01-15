<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CafeTech</title>
    <link rel="stylesheet" href="css/aboutus.css" />
  <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/navbar.css" />
</head>

<body>


    <?php
    session_start();
    $login = $_SESSION["login"];
    if ($login == 0) {
        require "navbar.php";
    } else if ($login == 1) {
        require "navbar2.php";
    }
    ?>
    <div class="container">
        <section class="about-section">
            <div class="left">
                <div>
                    <h2 style="font-size: 34px; text-align: center">Welcome to CafeTech</h2>
                    <p>CafeTech is a cozy cafe located in Klaipeda, Lithuania. We pride ourselves on providing <br> a comfortable
                        environment where you can enjoy delicious food and beverages.</p>
                    <p>Our menu features a wide variety of hot and cold drinks, as well as delectable desserts <br> that are sure
                        to satisfy your cravings.</p>
                    <p>At CafeTech, we strive to create a relaxing atmosphere where you can unwind, catch up <br> with friends,
                        or work on your projects. Our friendly staff is always ready to assist you <br> and make your visit
                        enjoyable.</p>
                    <p>As a part of our commitment to customer satisfaction, we offer free Wi-Fi access to all <br> our guests, so
                        you can stay connected while enjoying your time at CafeTech.</p>
                    <div class="phone_email">
                        <p style="font-size: 18px;">For any inquiries or to make a reservation, please contact us at:</p>

                        <ul>
                            <li>Phone: +90 536 626 55 05</li>
                            <li>Email: ssamet_semiz@hotmail.com</li>
                        </ul>
                    </div>
                    <div class="address">
                        <p>Visit us at:</p>
                        <address>
                            Turgaus g. 21<br>
                            91249 Klaipėda
                            Lithuania
                        </address>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="image-section">
                    <img src="images/Backgrounds/cafe-img.jpg" alt="CafeTech Image">
                </div>

            </div>
        </section>
    </div>

    <?php
    require "footer.php";
  ?>
</body>

</html>