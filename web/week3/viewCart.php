<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php

  include '/head.php';

  ?>
  <body>
    <?php

      include '/navbar.php';

    ?>

    <!-- Content Dynamically Generated in main.js file -->
    <h3>There are no items in your cart. Check out items for purchase at our <a href="/week3/browseItems.php">store page.</a></h3>
    
    <?php

      include '/footer.php';

    ?>
    <script src="/week3/main.js" type="module"></script>
  </body>
</html>