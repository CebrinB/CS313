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
      $query = 'SELECT * FROM ecommerce.item WHERE item_name :filt';
            $statement = $db->prepare($query);
            $stmt->bindValue(':filt', '%'.$_POST['filter'].'%', PDO::PARAM_STR);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement->closeCursor();

             foreach ($rows as $row) {
               echo $row['item_id'];
             }
        
    ?></div>


 

    <?php include 'view/footer.php'; ?>
  </body>
</html>