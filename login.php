<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // temp sessions
include("database.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors

if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM user_data WHERE username='$username' && password='$password'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION['user_id'] = $row['id']; // put user id into temp session
										 header("refresh:1;url=profile.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Log-in</title>
</head>
<body>
    <div id="scrollPath"></div>
    <?php
        include("header3.php")
    ?>
    <div class="logcen">
        <div class="login-wrapper">
            <form action="" method = "post">
                <h1>LOGIN</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name = "username" required>
                </div>
                
                <div class="input-box">
                    <input type="password" placeholder="Password" name ="password" required>
                </div>
        
                <div class="remember-forgot">
                    <a href="#">Forgot password?</a>
                </div>

                <button class="lgnbtn" type="submit" value ="LOGIN" name ="submit"> Login </button>
                <div class="register-link">
                    <p class="p">Create an account? <a href="signup.php"> Sign Up</a></p>
                    <br>
                    <span style="color:red;"><?php echo $message; ?></span>
                </div>
            </form>
        </div>
    </div>
    <?php
        include("footer.html")
    ?>
</body>
</html>