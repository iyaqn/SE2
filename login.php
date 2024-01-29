<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="login.css" rel="stylesheet" />

    
</head>
<body>
    <div class="container">
        <form id="login-form" method="post" action="login-process.php">
            <h1>Login</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p id="error-message"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="email">Email:</label>
            <br>
            <input type="text" id="email" name="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Login">
            <br> <br>
        Don't have an account? <a href="registration.html" class="button">Sign up</a>
        </form>
       
    </div>
</body>
</html>