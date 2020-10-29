<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'script/login_php.php'; ?>
	<?php include 'includes/head.php'; ?>
</head>
<body >
	<!--- Navigation -->
	<?php include 'includes/navbar.php'; ?>

	<div class="container" style="margin-top: 5%; width: 30%;">
		<h2 style="color: #006400">Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color: #006400" value="Submit">
            </div>
            <p>Don't have an account? <a href="signup.php">Signup here</a>.</p>
        </form>
	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>