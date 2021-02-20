<?php

session_start();


include 'head.php';

?>
<body>
<?php include 'navbar.php'; ?>
<h1>Sign Up</h1>
<?php
if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
       }
?>
<div id="error"></div>
<form onsubmit="return clientSideStretch3()" method="post" action="login.php">
<label>Username:</label><br>
<input name="username" type=text><br>
<label>Password:</label><br>
<?php if (isset($mark)) {
        echo "<span class='notice'>*</span>";
       }?><input id="password1" name="password" type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{7,}$"><br>
<label>Re-enter Password:</label><br>
<?php if (isset($mark)) {
        echo "<span class='notice'>*</span>";
       }?><input id="password2" name="password2" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{7,}$" type="password"><br>
<button type="submit">Sign Up</button>
<input type="hidden" name="action" value="signUp">
</form>
<?php include 'footer.php'; ?>
<script src="main.js"></script>
</body>
</html>
<?php unset($_SESSION['message'])?>