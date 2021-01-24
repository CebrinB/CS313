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

    ?>
    
    <link rel="stylesheet" href="/week3/week3Styles.css">

    <!-- Page Content -->
    <a href="/week3/viewCart.php"><input value="View Cart" class="btn btn-primary btn-sm"></button></a>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>
    
    <p>Items in Cart: <?php echo $_SESSION["items"] ?></p>

    <form action="/week3/viewCart.php" method="post">
      <ul>
        <li>
          <h5>Saddle</h5></br>
          <a href="#"><img class="card-img-top" src="saddle.jfif" width="125" height="125" alt="Horse Saddle"></a>
          <input type="text" id="addSaddle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
        </li>
        <li>
          <h5>Bridle</h5></br>
          <a href="#"><img class="card-img-top" src="bridle.jfif" width="125" height="125" alt="Horse Bridle"></a>
          <input type="text" id="addBridle" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
        </li>
        <li>
          <h5>Blanket</h5></br>
        <a href="#"><img class="card-img-top" src="blanket.jfif" width="125" height="125" alt="Horse Blanket"></a>
          <input type="text" id="addBlanket" placeholder="Quantity">
          <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
        </li>
        
      </ul>
      <input type="submit" class="btn btn-primary btn-sm" value="View Cart"></button>
    </form>

    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>


    <?php

      include '../footer.php';

    ?>
    <script src="/week3/main.js" type="module"></script>
  </body>
</html>