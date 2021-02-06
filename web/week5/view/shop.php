<?php
  // Start the session
  session_start();
  
  include '../support/database.php';
  
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3 sidenav">
          <h4>Categories</h4>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Saddles</a></li>
            <li><a href="#">Bridles</a></li>
            <li><a href="#">Blankets</a></li>
          </ul><br>
        </div>
        <div class="col-sm-9">
          <?php 
            $r = 0;
            $c = 1;

            echo "<h1>Items</h1></br>";
            echo '<div class="row">';
            foreach ($db->query('SELECT item_id, item_name, item_price, item_description FROM ecommerce.item') as $row)
              {
                echo
                '<div class="card col-sm-4">
                  <img class="card-img-top" src="../images/' . $row['item_name'] . $row['item_id'] . '.jpg" width="100%" alt="">
                  <div class="card-body">  
                    <h5 class="card-title">'. $row['item_name'] .'<span class="text-right">$'. $row['item_price'] .'</span></h5>
                    <p class="card-text">' . $row['item_description'] .'</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                  </div>
                </div>';
              }
            echo '</div>';  
          ?>
        </div>
      </div>
    </div>



 

    <?php include 'footer.php'; ?>
  </body>
</html>