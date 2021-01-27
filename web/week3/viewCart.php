<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <?php

  include '../head.php';

  ?>
  <body>
    <?php

      include '../navbar.php';

    ?>

    <div id="emptyCart" style="display:none"><?php echo $_SESSION['items']; ?></div>

    <!-- Content Dynamically Generated in main.js file -->
    <h3 id="emptyCartLink">There are no items in your cart. Check out items for purchase at our <a href="/week3/browseItems.php">store page.</a></h3>
    
    <?php

      include '../footer.php';

    ?>
    <script src="/week3/main.js" type="module"></script>
  </body>
</html>