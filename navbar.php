<!--- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="chat.php">Start Chatting</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="upload.php">Upload Videos</a>
						</li>
					</ul>
				</div>

				 <?php 
				 	  if(!isset($_SESSION)){
				 	  	session_start();

				 	  	if(isset($_SESSION['username'])) 
					    { 
					        echo "<a class=\"nav-link\">Welcome <b>".$_SESSION["username"]."</b> !</a>";
					        echo "<a href=\"logout_php.php\">Logout</a>";
					    }
				 	  }
				 ?>
				<div style="margin-left: 25px">
					<a class="navbar-brand form-inline my-2 my-lg-0" href="login.php"><button type="button" class="btn btn-info" style="background-color: #006400">Login</button></a>
					<a class="navbar-brand form-inline my-2 my-lg-0" href="signup.php"><button type="button" class="btn btn-info" style="background-color: #006400">Sign up</button></a>
				</div>
			</div>
		</nav>

<!--- Logo -->
	<img src="img/logo.png" style="height: 110;width: 264px;">