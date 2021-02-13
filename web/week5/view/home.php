<?php
  // Start the session
  session_start();
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="jumbotron text-left">
      <div class="container">
        <h1>The Best in Tack & Equipment.</h1>      
        <p>Find Exactly What You Need</p>
        <a href="shop.php" role="button">START SHOPPING NOW</a>
      </div>
    </div>
    
    <!-- 3 cards below jumbotron -->
    <div class="container text-center">    
      <h3>Shop By Category</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top img-circle tem" src="../images/saddle2.jpg" width="100%" alt="Black dressage saddle">
            <div class="card-body">
              <h5 class="card-title">Saddles</h5>
              <p class="card-text">Shop our Dressage saddles</p>
              <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <img src="../images/Bridle5.jpg" class="img-responsive" style="width:100%" alt="Chestnut horse with bridle">
          <p>Bridles</p>
          <a href="shop.php" class="btn btn-primary">SHOP NOW</a>    
        </div>
        <div class="col-sm-4">
          <img src="../images/Blanket6.jpg" class="img-responsive" style="width:100%" alt="Bay horse with blue blanket">
          <p>Blankets</p>
          <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
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