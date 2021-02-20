<?php include 'head.php' ?>
<body class="text-center">
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1>Sign In</h1>
                <?php
                if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                ?>
                <form method="post" action="login.php" class="form-signin">
                    <label>Username:</label><br>
                    <input class="form-control" name="username" type=text required autofocus><br>
                    <label>Password:</label><br>
                    <input class="form-control" name="password" type="password" required><br>
                    <button class="btn btn-lg btn-block" type="submit">Sign In</button>
                    <input type="hidden" name="action" value="signIn">
                </form></br>
                <a href="signUp.php" id="homeshop">Don't have an account? Sign up Today!</a>
            </div>
        <div class="col-lg-3"></div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>