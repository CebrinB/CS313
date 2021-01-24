<!DOCTYPE html>
<html lang="en">
  <?php

  include '../head.php';

  ?>
  <body>
    <?php

      include '../navbar.php';

    ?>
    
    <!-- Page Content -->
    <ul>
      <li>
      <a href="#"><img class="card-img-top" src="saddle.jfif" alt="Horse Saddle"></a>
        <label for="addSaddle">Quantity</label>
        <input type="text" id="addSaddle">
      </li>
      <li>
      <a href="#"><img class="card-img-top" src="bridle.jfif" alt="Horse Bridle"></a>
        <label for="addBridle">Quantity</label>
        <input type="text" id="addBridle">Bridle
      </li>
      <li>
      <a href="#"><img class="card-img-top" src="blanket.jfif" alt="Horse Blanket"></a>
        <label for="addBlanket">Quantity</label>
        <input type="text" id="addBlanket">Blanket
      </li>
      
    </ul>
    <button id="addToCart">Update Cart</button>
    <button id="viewCart">View Cart</button>
    <button id="checkout">Go to Checkout</button>


    <?php

      include '../footer.php';

    ?>
    <script src="/main.js" type="module"></script>
  </body>
</html>