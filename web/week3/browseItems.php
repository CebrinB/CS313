<!DOCTYPE html>
<html lang="en">
  <?php

  include '../head.php';

  ?>
  <body>
    <?php

      include '../navbar.php';

    ?>
    
    <link href="/week3/week3Styles.css">

    <!-- Page Content -->
    <input id="viewCart" type="submit" class="btn btn-primary btn-sm">View Cart</button>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>

    <form action="viewCart.php" method="post">
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
    </form>

    <input id="viewCart" type="submit" class="btn btn-primary btn-sm">View Cart</button>
    <button id="checkout" class="btn btn-primary btn-sm">Go to Checkout</button>


    <?php

      include '../footer.php';

    ?>
    <script src="/week3/main.js" type="module"></script>
  </body>
</html>