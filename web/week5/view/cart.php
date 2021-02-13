<?php
  // Start the session
  session_start();
  
  include 'head.php';

?>

  <body>
    <?php 
    
      include 'navbar.php'; 
      if (isset($_SESSION['cart'])) {
        if ($_SESSION['cart'] == 0) {
          print 'You have no items in your cart. Check out our store page for must-have items!';
        }
      } else print 'Cart: ' . $_SESSION['cart'];
      
    ?>

    <!-- Page Content -->


    <?php include 'footer.php'; ?>
  </body>
</html>