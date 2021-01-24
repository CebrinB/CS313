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
        <h5>Saddle</h5></br>
        <a href="#"><img class="card-img-top" src="saddle.jfif" width="125" height="125" alt="Horse Saddle"></a>
        <div class="input-group">
          <input id="color" type="text" class="form-control col-xs-2" placeholder="Quantity">
          <div class="input-group-btn">
            <input type="button" id="btn1" class="btn btn-info" value="Add to Cart">
          </div>
        </div>
      </li>
      <li>
        <h5>Bridle</h5></br>
        <a href="#"><img class="card-img-top" src="bridle.jfif" width="125" height="125" alt="Horse Bridle"></a>
        <label for="addBridle">Quantity</label>
        <input type="text" id="addBridle">
        <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
      </li>
      <li>
        <h5>Blanket</h5></br>
      <a href="#"><img class="card-img-top" src="blanket.jfif" width="125" height="125" alt="Horse Blanket"></a>
        <label for="addBlanket">Quantity</label>
        <input type="text" id="addBlanket">
        <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
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