<?php
  // Start the session
  session_start();
  
  include '../support/database.php';
  
  $filter = 'ALL';

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $keys = array_keys($_GET);
    $filter = $keys[0];
  }
  echo $filter;

  include 'head.php';

?>


  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3 sidenav text-dark">
          <h4>Categories</h4>
          <form>
            <ul class="nav nav-pills nav-stacked text-dark">
              <li><input type="submit" name="Saddle">Saddles</li>
              <li><input type="submit" name="Bridle">Bridles</li>
              <li><input type="submit" name="Blanket">Blankets</li>
            </ul><br>
          </form>
        </div>
        <div class="col-sm-9">
          <?php 
            $r = 0;
            $c = 1;

            echo "<h1>Items</h1></br>";
            echo '<div class="row">';
            //$query = 'SELECT * FROM ecommerce.item WHERE item_name = '".$filter."' ORDER BY item_name';
            // $statement = $db->prepare($query);
            // $statement->execute();
            // $infos = $statement->fetchAll(PDO::FETCH_ASSOC);
            // $statement->closeCursor();

            // foreach ($infos as $info) {
            //   echo $info;
            // }
            foreach ($db->query('SELECT item_id, item_name, item_price, item_description FROM ecommerce.item ORDER BY item_name') as $row)
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