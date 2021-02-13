<?php
  // Start the session
  session_start();
  
  if (!isset($_SESSION['cart'])) {  
    $_SESSION['cart'] = 0;
  } else $_SESSION['cart'] += 1;

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
                    <img class="card-img-top rounded" src="../images/' . $row['item_type'] . $row['item_id'] . '.jpg" width="100%" alt="">
                    <div class="card-body">  
                      <h5 class="card-title">'. $row['item_name'] .'<span class="text-right">$'. $row['item_price'] .'</span></h5>
                      <p class="card-text">' . $row['item_description'] .'</p>
                      <a href="item.php?item_id=\''.$row['item_id'].'\'" class="btn btn-primary">View</a>
                      
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



 

    <?php include 'footer.php'; ?>
  </body>
</html>