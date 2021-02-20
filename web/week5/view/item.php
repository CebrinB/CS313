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
        <div class="col-md-4 text-center" id="fillpic"><img src="../images/<?php echo $row['item_type'] . $row['item_id'] ?>.jpg"></div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
        <div class="row">
          <?php echo '<div><h3>'.$row['item_name'].'</h3></div>';
                echo '<h4 class="font-weight-bold">$'.$row['item_price'].'</h4>';
                echo '<div>'.$row['item_description'].'</div>'; ?>
        </div>
        <div class="row"><br>
        <div class="col-md-6"></div>
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
                } else echo "No reviews for this item.";?>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      <div class="row" id="padrow">
        <div class="col-md-6 well">
          <div><h4>Write a Review</h4></div>
            <form id="reviewForm" method ="POST" action="../support/insert_review.php">
              <input class="form-control" type="text" name="user_name" placeholder="Username" required>
              <div class="stars">
                <label for="rating"> Rating 1 - 5:</label>1
                <input type="radio" name="rating" value="1"> 
                <input type="radio" name="rating" value="2"> 
                <input type="radio" name="rating" value="3"> 
                <input type="radio" name="rating" value="4"> 
                <input type="radio" name="rating" value="5">5
              </div>
              <input type="text" name="title" placeholder="Title for your Review">
              <textarea name="content" placeholder="Tell us what you think of our product!"></textarea>
              <input type="hidden" name="item_id" value="<?php echo $item_id;?>">
              <input type="submit" value="Save Review">
            </form>
          </div>
      </div>
    </div>
  </div>
  <hr>
      


    <?php include 'footer.php'; ?>
    <script src="main.js" type="module"></script>
  </body>
</html>