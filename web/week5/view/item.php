<?php
  // Start the session
  session_start();
  
  if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = 0;
  } else $_SESSION['cart'] += 1;

  include '../support/database.php';

  $item_id = htmlspecialchars($_GET['item_id']);
 
  $sql = 'SELECT * FROM ecommerce.item WHERE item_id = '.$item_id;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $sql = 'SELECT * FROM ecommerce.review WHERE item_id = '.$item_id;
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
            echo '<h3>'.$row['item_name'].'</h3>';
          } ?>
          <div><h3><a href="" id="showform">Write a Review</a></h3></div>
          <form id="reviewForm" method ="POST">
            <input type="text" name="user_id" placeholder="Username">
            <div class="stars">
              <input type="radio" name="rating" value="1"> 
              <input type="radio" name="rating" value="2"> 
              <input type="radio" name="rating" value="3"> 
              <input type="radio" name="rating" value="4"> 
              <input type="radio" name="rating" value="5">
            </div>
            <input type="text" name="title" placeholder="Title for your Review">
            <input type="text" name="content" placeholder="Tell us what you think of our product!">
            <input class="d-none" type="number" value="<?php echo $rows[0]['item_id'];?>">
            <input type="submit" value="Save Review">
          </form>
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
                if (sizeof($reviews) > 0) {
                  foreach ($reviews as $review) {
                    if ($i == 0) {
                      echo '<div class="item active">';
                      $i++;
                    } else echo '<div class="item">';
                    echo '<h2>'.$review['title'].'</h2>
                          <div class="col-md-3">
                            <span class="sr-only">'.$review['rating'].' out of Five Stars</span>';
                            $stars = $review['rating'];
                            for ($i = 0; $i < $stars; $i++) {
                              echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
                            }
                            $unstars = (5 - $stars);
                            for ($i = 0; $i < $unstars; $i++) {                                
                              echo '<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>';
                            }
                    echo '</div>                          
                          <div>'.$review['content'].'</div>
                          <div>'.$review['timestamp'].'</div>';
                  } 
                } else die("No reviews for this item.");?>

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
      


    <?php include 'footer.php'; ?>
    <script src="main.js" type="module"></script>
  </body>
</html>