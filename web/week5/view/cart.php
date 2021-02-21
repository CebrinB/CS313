<?php
  // Start the session
  session_start();

  include '../support/database.php';
 
  $msg = 'Please <a href="login.php">login</a> 
          to view your cart. If you do not have an account, 
          you can <a href="signUp.php">create one here</a>.';
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div><?php if (!isset($_SESSION['username'])) { echo $msg;} ?></div>
        </div> <!-- close column -->
        <div class="col-md-2"></div>
      </div> <!-- close row -->
    </div> <!-- close container -->

    <?php include 'footer.php'; ?>
  </body>
</html>