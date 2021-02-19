<?php
  // Start the session
  session_start();

  if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = 0;
  } else $_SESSION['cart'] += 1;

  
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="jumbotron text-left">
      <div class="container">
        <h1>The Best in Tack & Equipment.</h1>      
        <p>Find Exactly What You Need</p>
        <a href="shop.php">START SHOPPING NOW</a>
      </div>
    </div>
    
    <!-- 3 cards below jumbotron -->
    <div class="container text-center">    
      <h3>Shop By Category</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top img-circle img-home" src="../images/saddle2.jpg" alt="Black dressage saddle">
            <div class="card-body">
              <h4 class="card-title">Saddles</h4>
              <p class="card-text">Shop our saddles</p>
              <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <div class="card">
            <img class="card-img-top img-circle img-home" src="../images/Bridles5.jpg" alt="Chestnut horse with bridle">
            <div class="card-body">
              <h4 class="card-title">Bridles</h4>
              <p class="card-text">Shop our bridles</p>
              <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
            </div>  
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
          <img class="card-img-top img-circle img-home" src="../images/Blankets6.jpg" alt="Bay horse with blue blanket">
            <div class="card-body">
              <h4 class="card-title">Blankets</h4>
              <p class="card-text">Shop our Winter Blankets</p>
              <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
            </div>  
          </div>
        </div>
      </div>
    </div><br>
    
  

    <div class="fixed-bottom">Images by <a href="https://pixabay.com/users/annajelec-465286/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5616954">annajelec</a>,
    <a href="https://pixabay.com/users/jodi442-6226968/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2665751">jodi442</a>,
     and <a href="https://pixabay.com/users/rihaij-2145/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2348773">rihaij</a>. 
     View their other images at Pixabay <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5616954">here, </a>
    <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2665751">here, </a>
    <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2348773">and here.</a>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>