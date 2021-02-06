<?php
  // Start the session
  session_start();
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1>The Best in Tack & Equipment.</h1>      
        <p>Find Exactly What You Need</p>
        <a class="btn btn-dark" href="shop.php" role="button">START SHOPPING NOW</a>
      </div>
    </div>
    
    
    
    
    
    
    
    <a href="viewCart.php"><button class="btn btn-primary btn-sm">View Cart</button></a>
    <a href="checkout.php"><button class="btn btn-primary btn-sm">Go to Checkout</button></a>
    <div>Items in Cart: <?php echo $_SESSION["items"] ?></div>

    <form action="home.php" method="POST">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="#"><img class="card-img-top" src="saddle.jfif" width="125" height="125" alt="Horse Saddle"></a>
          <span><h5>Saddle</h5></span>
          <span><h5>Price: $899.95</h5></span>
          <input type="number" name="saddle" placeholder="Quantity">
        </li>
        <li class="list-group-item">
          <a href="#"><img class="card-img-top" src="bridle.jfif" width="125" height="125" alt="Horse Bridle"></a>
          <span><h5>Bridle</h5></span>
          <span><h5>Price: $399.95</h5></span>
          <input type="number" name="bridle" id="bridle" placeholder="Quantity">
        </li>
        <li class="list-group-item">
        <a href="#"><img class="card-img-top" src="blanket.jfif" width="125" height="125" alt="Horse Blanket"></a>
        <span><h5>Blanket</h5></span>
          <span><h5>Price: $199.95</h5></span>
          <input type="number" name="blanket" id ="blanket" placeholder="Quantity">
        </li>
      </ul>
      <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
    </form>

    <a href="viewCart.php"><button class="btn btn-primary btn-sm">View Cart</button></a>
    <a href="checkout.php"><button class="btn btn-primary btn-sm">Go to Checkout</button></a>

    <div>Image by <a href="https://pixabay.com/users/annajelec-465286/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5616954">annajelec</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5616954">Pixabay</a><br>
    Image by <a href="https://pixabay.com/users/jodi442-6226968/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2665751">jodi442</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2665751">Pixabay</a><br>
    Image by <a href="https://pixabay.com/users/rihaij-2145/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2348773">rihaij</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2348773">Pixabay</a>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>