<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'script/signup_php.php'; ?>
	<?php include 'includes/head.php'; ?>
</head>
<body >
    <!--- Navigation -->
	<?php include 'includes/navbar.php'; ?>

    <!--- Sign up form -->
	<div class="container" style="margin-top: 1%; width: 30%">
		<h2 style="color: #006400">Sign Up</h2>
        <p>Create an account to start learning!</p>
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
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group>">
                <label>I want to learn</label>
                  <select class="form-control" name="language">
                    <option>Arabic</option>
                    <option>Chinese </option>
                    <option>English</option>
                    <option>French</option>
                    <option>German</option>
                    <option>Japanese</option>
                    <option>Russian</option>
                    <option>Serbian</option>
                  </select>
            </div>
            </br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color: #006400" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
	</div>

    <!--- Footer -->
	<?php include 'includes/footer.php'; ?>
</body>
</html>