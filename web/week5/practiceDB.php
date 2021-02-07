<?php
  // Start the session
  session_start();
  
  include 'support/database.php';
  
  
  include 'view/head.php';

?>

  <body>
    <?php include 'view/navbar.php'; ?>

    <!-- Page Content -->
    <div>
    <?php 
      echo "<h1>Items</h1></br>";
      $sql = 'SELECT * FROM ecommerce.item WHERE item_name LIKE :filter';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':filter', '%'.$_GET['filter'].'%', PDO::PARAM_STR);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt->closeCursor();

      foreach ($rows as $row){
        echo "<div>" . $row['item_id'] . "</b></a></div>";
      }
        
    ?></div>

<html>
<form method="GET">
<input type='text' name='filter'>
<input type='submit' value='Saddle'>
</from>
</html> 

    <?php include 'view/footer.php'; ?>
  </body>
</html>