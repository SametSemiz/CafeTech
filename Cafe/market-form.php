<?php
session_start();
$login = $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/market-form.css" />
</head>

<body>
    <?php
    if ($login == 1) { ?>
        <div class="container">

            <div class="text">
                Address Information Form
            </div>
            <form method="POST" action="save.php">
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" required name="first_name">
                        <div class="underline"></div>
                        <label for="">First Name</label>
                    </div>
                    <div class="input-data">
                        <input type="text" required name="last_name">
                        <div class="underline"></div>
                        <label for="">Last Name</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="email" required name="email">
                        <div class="underline"></div>
                        <label for="">Email Address</label>
                    </div>
                    <div class="input-data">
                        <input type="tel" id="phone" required name="phone">
                        <script>
                            var phoneInput = document.getElementById('phone');

                            phoneInput.addEventListener('input', function() {
                                phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');

                                if (phoneInput.value.length > 10) {
                                    phoneInput.value = phoneInput.value.slice(0, 10);
                                }
                            });
                        </script>
                        <div class="underline"></div>
                        <label for="">Phone Number</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" required name="address">
                        <div class="underline"></div>
                        <label for="">Address</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" required name="message">
                        <div class="underline"></div>
                        <label for="">Write your message</label>
                    </div>
                </div>


                <div style="margin: 0 0 20px 0;" class="form-row submit-btn">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="submit">
                    </div>
                </div>
            </form>
        </div>
    <?php
    } else if ($login == 0) {
        header("Location: wait2.php");
    }
    ?>

</body>

</html>