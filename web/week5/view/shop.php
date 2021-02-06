<?php
  // Start the session
  session_start();
  
  include '../support/database.php';
  
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div>
    <?php 
    
    $r = 0;
    $c = 1;

      echo "<h1>Items</h1></br>";
      foreach ($db->query('SELECT item_id, item_name, item_price, item_description FROM ecommerce.item') as $row)
        {
          echo  . $row['item_id'] . " " . $row['item_name'] . ":" . $row['item_price'] . "</b></a></div>";
          '<div class="card" style="width: 18rem;">
            <img class="card-img-top" src="' . $row['item_name'] . $row['item_id'] . '.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">'. $row['item_name'] .'</h5>
              <h5 class="card-title text-right">$'. $row['item_price'] .'</h5>
              <p class="card-text">' . $row['item_description'] .'</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>';
        
        }
        
    ?></div>


 

    <?php include 'footer.php'; ?>
  </body>
</html>