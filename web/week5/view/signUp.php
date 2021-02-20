<?php include 'head.php'; ?>
<body class="text-center">
  <?php include 'navbar.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4 well">
        <h1>Create an Account</h1>
        <?php if (isset($_SESSION['message'])) {
          echo $_SESSION['message'];
        } ?>
        <form action="login.php" method="POST">
          <label for="username" class="sr-only">Username:</label><br>
          <input name="username" id="username" type="text" placeholder="Username" required autofocus>
          <label for="password" class="sr-only">Password:</label><br>
          <?php if (isset($mark)) {
            echo '<span class="notice">*</span>';
          } ?>
          <input name="password" id="password" type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{7,}$" required>
          <label for="checkpassword" class="sr-only">Confirm password:</label><br>
          <?php if (isset($mark)) {
            echo '<span class="notice">*</span>';
          } ?>
          <input name="password2" id="checkpassword" type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{7,}$" required>
          <button type="submit">Sign up</button>
          <input type="hidden" name="action" value="signUp">
        </form>
        <?php include 'footer.php'; ?>     
      </div>
      <div class="col-lg-4"></div>
    </div> <!-- close row -->
  </div> <!-- close container -->
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>