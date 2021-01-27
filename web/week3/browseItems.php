<?php
// Start the session
session_start();

$_SESSION["items"] = $_POST["saddle"] + $_POST["bridle"] + $_POST["blanket"];
?>

<!DOCTYPE html>
<html lang="en">
  <?php

  include '../head.php';

  ?>
  <body>
    <?php

      include '../navbar.php';

      $_SESSION["saddle"] = 0;
      $_SESSION["bridle"] = 0;
      $_SESSION["blanket"] = 0;
      $_SESSION["items"] = $_POST["saddle"] + $_POST["bridle"] + $_POST["blanket"];

      print_r($_SESSION);

    ?>
    
    <link rel="stylesheet" href="/week3/week3Styles.css">

    <!-- Page Content -->
    <a href="/week3/viewCart.php"><input value="View Cart" class="btn btn-primary btn-sm"></button></a>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>
    <div>Items in Cart: <?php echo $_SESSION["items"] ?></div>

    <form action="/week3/viewCart.php" method="POST">
      <ul>
        <li>
          <h5>Saddle</h5></br>
          <a href="#"><img class="card-img-top" src="saddle.jfif" width="125" height="125" alt="Horse Saddle"></a>
          <input type="number" name="saddle" id="saddle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="javascript:addToCart()">Add to Cart</button>
        </li>
        <li>
          <h5>Bridle</h5></br>
          <a href="#"><img class="card-img-top" src="bridle.jfif" width="125" height="125" alt="Horse Bridle"></a>
          <input type="number" name="bridle" id="bridle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="javascript:addToCart()">Add to Cart</button>
        </li>
        <li>
          <h5>Blanket</h5></br>
        <a href="#"><img class="card-img-top" src="blanket.jfif" width="125" height="125" alt="Horse Blanket"></a>
          <input type="number" name="blanket" id ="blanket" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="javascript:addToCart()">Add to Cart</button>
        </li>
        
      </ul>
      <input type="submit" class="btn btn-primary btn-sm" value="View Cart"></button>
    </form>

    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>


    <?php

      include '../footer.php';

    ?>
    <script>
      console.log("here2");
      function addToCart() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              console.log(document.querySelector('#saddle').value);
            }
        };
        xmlhttp.open("POST", "functions.php?", true);
        xmlhttp.send();
      }

    </script>
  </body>
</html>