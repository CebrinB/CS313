<?php
  // Start the session
  session_start();
  require_once '../support/database.php';
  
  include 'head.php';

  echo $db;

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->


 

    <?php include 'footer.php'; ?>
  </body>
</html>