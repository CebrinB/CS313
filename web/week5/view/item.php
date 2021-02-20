<?php
  // Start the session
  session_start();

  include '../support/database.php';

  $item_id = filter_input(INPUT_GET, 'item_id', FILTER_SANITIZE_NUMBER_INT);
 
  $sql = 'SELECT * FROM ecommerce.item WHERE item_id = '.$item_id;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
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
      <div class="row" id="itemtop">
        <div class="col-md-3"><img src="../images/<?php echo $row['item_type'] . $row['item_id'] ?>.jpg"></div>
        <div class="col-md-3">
          <?php echo '<h3>'.$row['item_name'].'</h3>'; ?>
          
        
        <div class="col-md-6">
          <div><h3>Reviews</h3></div>
            <div>
              <?php
                if (sizeof($reviews) > 0) {
                  foreach ($reviews as $review) {
                    echo '<div class="item">';
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
            </div>
          </div>
        </div>
      </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div><h4><a href="" id="showform">Write a Review</a></h4></div>
            <form id="reviewForm" method ="POST" action="../support/insert_review.php">
              <input type="text" name="user_name" placeholder="Username">
              <div class="stars">
                <label> Rating 1 - 5:
                  <input type="radio" name="rating" value="1"> 
                  <input type="radio" name="rating" value="2"> 
                  <input type="radio" name="rating" value="3"> 
                  <input type="radio" name="rating" value="4"> 
                  <input type="radio" name="rating" value="5">
                </label>
              </div>
              <input type="text" name="title" placeholder="Title for your Review">
              <textarea name="content" placeholder="Tell us what you think of our product!"></textarea>
              <input type="hidden" name="item_id" value="<?php echo $item_id;?>">
              <input type="submit" value="Save Review">
            </form>
          </div>
        
      
    </div>
  </div>
  <hr>
      


    <?php include 'footer.php'; ?>
    <script src="main.js" type="module"></script>
  </body>
</html>