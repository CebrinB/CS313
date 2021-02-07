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
      $sql = 'SELECT * FROM team05.scriptures WHERE book LIKE :book';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':book', '%'.$_POST['book'].'%', PDO::PARAM_STR);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt->closeCursor();

      foreach ($rows as $row){
        echo "<div><a href=\"scripturesDetails.php?id=" . $row["id"] . "\"><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b></a></div>";
      }
        
    ?></div>

<html>
<form method="POST">
<input type='text' name='book'>
<input type='submit' value='submit'>
</from>
</html> 

    <?php include 'view/footer.php'; ?>
  </body>
</html>