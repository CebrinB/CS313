<?php
  // Start the session
  session_start();
  
  if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = 0;
  } else $_SESSION['cart'] += 1;

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo $_GET['item_id'];
  }
  include '../support/database.php';
 




  include 'head.php';

?>


  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row content">
        <!-- SideNav -->
        <div class="col-sm-3 sidenav text-dark">
          <h4>Categories</h4>
          <form method="POST">
            <ul class="nav nav-pills nav-stacked text-dark">
              <li><a href="shop.php" type="button">All</li>
              <li><input type="submit" name="filter" value="Saddles"></li>
              <li><input type="submit" name="filter" value="Bridles"></li>
              <li><input type="submit" name="filter" value="Blankets"></li>
            </ul><br>
          </form>
        </div>

        <!-- Item cards -->
        <div class="col-sm-9">
          <h1>Items</h1></br>
          <div class="row">
          <?php 
            $c = 1;

            $sql = '';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $sql = 'SELECT * FROM ecommerce.item WHERE item_type LIKE :filter';
            } else $sql = 'SELECT * FROM ecommerce.item';
            $stmt = $db->prepare($sql);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $stmt->bindValue(':filter', '%'.$_POST['filter'].'%', PDO::PARAM_STR);
            }
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            foreach ($rows as $row)
              {
                echo
                '<div class="col-sm-4 d-flex align-items-stretch">
                  <div class="card">
                    <img class="card-img-top" src="../images/' . $row['item_type'] . $row['item_id'] . '.jpg" width="100%" alt="">
                    <div class="card-body">  
                      <h5 class="card-title"><span class="float-left">'. $row['item_name'] .'</span><span class="float-right">$'. $row['item_price'] .'</span></h5>
                      <p class="card-text">' . $row['item_description'] .'</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                      <input class="d-none" name="item_id" id="item_id" value="'. $row['item_id'] . '">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reviews</a>
                      </div>
                  </div>
                </div>';
                if ($c % 3 == 0) {
                  echo '</div><div class="row">';
                }
                $c++;
              }
            echo '</div>';  
          ?>
          <div class="row"></div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body" id="#showCal">
            <?php
              $sql = '';
              //if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $sql = 'SELECT * FROM ecommerce.review WHERE item_id LIKE 1';
              //} else $sql = 'SELECT * FROM ecommerce.item';
              $stmt = $db->prepare($sql);
              //if ($_SERVER['REQUEST_METHOD'] == 'GET') {
              //$stmt->bindValue(':filter', '%'.$_GET['item_id'].'%', PDO::PARAM_STR);
              //}
              $stmt->bindValue(':filter', '1', PDO::PARAM_STR);
              $stmt->execute();
              $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
              $stmt->closeCursor();

              foreach ($reviews as $review)
                {
                  echo $review['title'];
                }
                
              
              
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>



 

    <?php include 'footer.php'; ?>
    <script src="../model/main.js" type ="module"></script>
  </body>
</html>