<?php
    require "db.php";

// Kategori isimlerini al
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $category = $row["category_name"];
    $products[$category][] = $row;
  }
} else {
  echo "Ürün bulunamadı.";
}

?>

<?php foreach ($products as $category => $categoryProducts) { ?>
  <div id="<?php echo $category; ?>" class="tabcontent">
    <?php foreach ($categoryProducts as $product) { ?>
      <div class="product">
        <img src="<?php echo $product["image_url"]; ?>" alt="<?php echo $product["name"]; ?>">
        <div class="name"><?php echo $product["name"]; ?></div>
        <div class="price"><?php echo $product["price"]; ?></div>
      </div>
    <?php } ?>
  </div>
<?php } ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/market.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <script src="js/market-tab.js"></script>

</head>

<body>
  <div class="container">

    <?php
    session_start();
    $login = $_SESSION["login"];
    if ($login == 0) {
      require "navbar.php";
    } else if ($login == 1) {
      require "navbar2.php";
    }
    ?>

    <div class="content">
      <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Tshirt')">T-shirt</button>
        <button class="tablinks" onclick="openTab(event, 'Thermos')">Thermos</button>
        <button class="tablinks" onclick="openTab(event, 'Cup')">Cup</button>
        <button class="tablinks" onclick="openTab(event, 'Coffee')">Coffee</button>
      </div>
      <div id="Tshirt" class="tabcontent">
        <?php
        $sql = "SELECT COUNT(*) AS product_count FROM market WHERE category = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $product_count = $row['product_count'];
        } else {
          echo "Error";
        }

        // Kategori 1'e ait ürünleri getir
        $sql = "SELECT * FROM market WHERE category = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='foreach_products'>";
            echo "<img style=' border-radius: 35px; width: 90%; margin: 20px 0 0 5px; padding: 0 10px 0 10px;' src='";
            echo $row['product_image'];
            echo " '>";
            echo "<div style='text-align: center; height: 30px; padding: 20px 20px 0 20px; font-size: 21px;'>";
            echo $row['product_name'];
            echo "</div>";
            echo "<div style='text-align: center; padding: 24px 20px 0 20px; font-size: 24px; font-weight: bold;'>";
            echo $row['product_price'];
            echo " €";
            echo "</div>";
            echo "<a href='market-form.php'><button class='btn'> Shop now </button></a>";
            echo "</div>";
          }
        } else {
          echo "Error";
        }
        ?>
      </div>
      <div id="Thermos" class="tabcontent">
        <?php
        $sql = "SELECT COUNT(*) AS product_count FROM market WHERE category = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $product_count = $row['product_count'];
        } else {
          echo "Error";
        }

        // Kategori 1'e ait ürünleri getir
        $sql = "SELECT * FROM market WHERE category = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='foreach_products'>";
            echo "<img style=' border-radius: 35px; width: 90%; margin: 20px 0 0 5px; padding: 0 10px 0 10px;' src='";
            echo $row['product_image'];
            echo " '>";
            echo "<div style='text-align: center; height: 30px; padding: 20px 20px 0 20px; font-size: 21px;'>";
            echo $row['product_name'];
            echo "</div>";
            echo "<div style='text-align: center; padding: 24px 20px 0 20px; font-size: 24px; font-weight: bold;'>";
            echo $row['product_price'];
            echo " €";
            echo "</div>";
            echo "<a href='market-form.php'><button class='btn'> Shop now </button></a>";
            echo "</div>";
          }
        } else {
          echo "Error";
        }
        ?>
      </div>
      <div id="Cup" class="tabcontent">
        <?php
        $sql = "SELECT COUNT(*) AS product_count FROM market WHERE category = 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $product_count = $row['product_count'];
        } else {
          echo "Error";
        }

        // Kategori 1'e ait ürünleri getir
        $sql = "SELECT * FROM market WHERE category = 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='foreach_products'>";
            echo "<img style=' border-radius: 35px; width: 90%; margin: 20px 0 0 5px; padding: 0 10px 0 10px;' src='";
            echo $row['product_image'];
            echo " '>";
            echo "<div style='text-align: center; height: 30px; padding: 20px 20px 0 20px; font-size: 21px;'>";
            echo $row['product_name'];
            echo "</div>";
            echo "<div style='text-align: center; padding: 24px 20px 0 20px; font-size: 24px; font-weight: bold;'>";
            echo $row['product_price'];
            echo " €";
            echo "</div>";
            echo "<a href='market-form.php'><button class='btn'> Shop now </button></a>";
            echo "</div>";
          }
        } else {
          echo "Error";
        }
        ?>
      </div>
      <div id="Coffee" class="tabcontent">
        <?php
        $sql = "SELECT COUNT(*) AS product_count FROM market WHERE category = 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $product_count = $row['product_count'];
        } else {
          echo "Error";
        }

        // Kategori 1'e ait ürünleri getir
        $sql = "SELECT * FROM market WHERE category = 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='foreach_products'>";
            echo "<img style=' border-radius: 35px; width: 90%; margin: 20px 0 0 5px; padding: 0 10px 0 10px;' src='";
            echo $row['product_image'];
            echo " '>";
            echo "<div style='text-align: center; height: 30px; padding: 20px 20px 0 20px; font-size: 21px;'>";
            echo $row['product_name'];
            echo "</div>";
            echo "<div style='text-align: center; padding: 24px 20px 0 20px; font-size: 24px; font-weight: bold;'>";
            echo $row['product_price'];
            echo " €";
            echo "</div>";
            echo "<a href='market-form.php'><button class='btn'> Shop now </button></a>";
            echo "</div>";
          }
        } else {
          echo "Error";
        }
        ?>
      </div>

      <script>
        // Başlangıçta Tshirt sekmesini açık yap
        document.getElementById("Tshirt").style.display = "block";
      </script>
    </div>






  </div>
  <?php
    require "footer.php";
  ?>
</body>

</html>