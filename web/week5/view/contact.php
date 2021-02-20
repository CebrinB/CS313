<?php
  // Start the session
  session_start();

  include '../support/database.php';
  
  include 'head.php';

?>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container-fluid">
      <div class="row content">
        <!-- SideNav -->
        <div class="col-sm-3 sidenav">
          <h4>Locations</h4>
          
            <ul class="nav nav-pills nav-stacked" id="locations">
               
              <!-- <li><a href="shop.php" type="button">> All</a></li>
              <li><a type="button">> <input type="submit" name="filter" value="Saddles"></a></li>
              <li><a type="button">> <input type="submit" name="filter" value="Bridles"></a></li>
              <li><a type="button">> <input type="submit" name="filter" value="Blankets"></a></li> -->
            </ul><br>
          
        </div>
      </div>
    </div>


    <?php include 'footer.php'; ?>
    <script src="../model/main.js"></script>
  </body>
</html>