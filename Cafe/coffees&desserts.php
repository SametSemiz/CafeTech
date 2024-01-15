<?php
    require "db.php";

// Ürünleri getir
$sql = "SELECT * FROM coffees_desserts";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "Ürün bulunamadı.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeTech</title>
    <link rel="stylesheet" href="css/coffees&desserts.css" />
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
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                <div class="details">
                    <div class="name"><?php echo $product["name"]; ?></div>
                    <div class="price"><?php echo $product["price"]; ?> €</div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
        require "footer.php";
    ?>
</body>

</html>