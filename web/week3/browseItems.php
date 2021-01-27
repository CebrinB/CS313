<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <?php

  include '../head.php';

  ?>
  <body>
    <?php

      include '../navbar.php';

      $qty = 0;

      if(isset($_POST['saddle'])){
        $_SESSION['saddle'] += $_POST['saddle'];
        $qty += $_POST['saddle'];

      }
      if(isset($_POST['bridle'])){
        $_SESSION["bridle"] += $_POST["bridle"];
        $qty += $_POST['bridle'];
      }
      if(isset($_POST['blanket'])){
        $_SESSION["blanket"] += $_POST["blanket"];
        $qty += $_POST['blanket'];
      }

      $_SESSION['items'] += $qty;

      print_r($_SESSION);


    ?>
    
    <link rel="stylesheet" href="week3Styles.css">

    <!-- Page Content -->
    <a href="viewCart.php"><input value="View Cart" class="btn btn-primary btn-sm"></button></a>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>
    <div>Items in Cart: <?php echo $_SESSION["items"] ?></div>

    <form action="browseItems.php" method="POST">
      <ul>
        <li>
          <h5>Saddle</h5></br>
          <a href="#"><img class="card-img-top" src="saddle.jfif" width="125" height="125" alt="Horse Saddle"></a>
          <input type="number" name="saddle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="">Add to Cart</button>
        </li>
        <li>
          <h5>Bridle</h5></br>
          <a href="#"><img class="card-img-top" src="bridle.jfif" width="125" height="125" alt="Horse Bridle"></a>
          <input type="number" name="bridle" id="bridle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="">Add to Cart</button>
        </li>
        <li>
          <h5>Blanket</h5></br>
        <a href="#"><img class="card-img-top" src="blanket.jfif" width="125" height="125" alt="Horse Blanket"></a>
          <input type="number" name="blanket" id ="blanket" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm" onclick="">Add to Cart</button>
        </li>
      </ul>
      <button type="submit" class="btn btn-primary btn-sm" value="View Cart"></button>
    </form>

    <a href="viewCart.php"><button class="btn btn-primary btn-sm" value="View Cart"></button></a>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>


    <?php

      include '../footer.php';

    ?>
  </body>
</html>