<?php
  // Start the session
  session_start();
  
  if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = 0;
  } else $_SESSION['cart'] += 1;

  include '../support/database.php';
 
  $sql = 'SELECT * FROM ecommerce.item WHERE item_id = :item_id';
  $stmt = $db->prepare($sql);
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt->bindValue(':item_id', '%'.$_GET['item_id'].'%', PDO::PARAM_STR);
  }
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $sql = 'SELECT * FROM ecommerce.review WHERE item_id LIKE :item_id';
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $stmt->closeCursor();


  include 'head.php';

?>


  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <?php foreach ($rows as $row) {
            echo $row['item_description'];
          } ?>
          Item info goes here
        </div>
        <div class="col-sm-8">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php //  for ($i = 0; $i < sizeof($reviews); $i++) {
                //if ($i == 0) {
                  //echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                //} else echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
              //} ?>
                
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php
                $i = 0;
                foreach ($reviews as $review) {
                  if ($i == 0) {
                    echo '<div class="item active">';
                  } else echo '<div class="item">';
                  echo '<h2>'.$review['title'].'</h2>
                        <div>'.$review['rating'].'</div>
                        <div>'.$review['content'].'</div>
                        <div>'.$review['timestamp'].'</div>
                        </div>';
                } ?>
            
              <div class="item active">
                <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                <div class="carousel-caption">
                  <h3>Sell $</h3>
                  <p>Money Money.</p>
                </div>      
              </div>

              <div class="item">
                <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                <div class="carousel-caption">
                  <h3>More Sell $</h3>
                  <p>Lorem ipsum...</p>
                </div>      
              </div>
            <!-- end wrapper for slides -->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
      </div>


    <?php include 'footer.php'; ?>
  </body>
</html>