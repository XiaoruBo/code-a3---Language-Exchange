<?php

// Alert if user is aready signed in
if(!isset($_SESSION)){
    session_start();

    if(isset($_SESSION['username'])) 
    { 
        echo "<div class=\"alert alert-primary\" role=\"alert\">You are currently logged in as ".$_SESSION["username"]."</div>";
    }
}

// Include config file
require_once "config_php.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }else{
        $username = trim($_POST["username"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        // Attempt to login
        $sql = "SELECT password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters to prevent SQL injection
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $stmt->bind_result($hashedPassword);
                    $stmt->fetch();
                    
                    if(password_verify($password, $hashedPassword)){ //if user-inputted password equals to the hashed password from DB
                         if(isset($_SESSION)){
                            session_destroy(); //destroy current session if it exists
                         }

                         session_start(); //begin new session
                         $_SESSION['username'] = $username; //reset session username variable

                         // Redirect to home page
                         header("location: home.php");
                    }
                    else{
                        $password_err = "The password entered is incorrect. Please try again.";
                    }
                } 
                else{
                    $username_err = "The username entered does not exist. Please try again.";
                }
            }
            else
            {
                $password_err = "Error during login. Please try again later.";
            }

        // Close connection
        mysqli_close($link);
        }
    }
}
?>