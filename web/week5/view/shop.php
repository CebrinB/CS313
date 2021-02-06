<?php
  // Start the session
  session_start();
  require_once '../support/database.php';
  
  include 'head.php';

  echo "<h1>Scripture Resources</h1></br>";
  foreach ($db->query('SELECT item_id, item_name, item_price, item_description FROM ecommerce.item') as $row)
    {
      echo "<div><a href=\"/scriptureDetails.php\"><b>" . $row['item_id'] . " " . $row['item_name'] . ":" . $row['item_price'] . "</b></a></div>";
    }

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->


 

    <?php include 'footer.php'; ?>
  </body>
</html>