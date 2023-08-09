<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    error_reporting(0); 
    include ("database.php");

    $message = "";
    $success = "";
    $phonelength = 11;

    if(isset($_POST["submit"])) {

        if(empty($_POST['fname']) ||  //fetching and find if its empty
   	    empty($_POST['lname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
        empty($_POST['address']) ||
		empty($_POST['username']))
		{
			$message = "All fields are Required!";
		}
	else
	{
		//checking username & email if already present
	$check_username= mysqli_query($db, "SELECT username FROM user_data where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM user_data where email = '".$_POST['email']."' ");

        if ($_POST['password']!= $_POST['cpassword'])
    {
            $message = "Password did not match! Try again.";
    }
        else if (strlen($_POST['password']) < 8) {

            $message = "Password length must exceed 8 characters.";
        }

    elseif(strlen($_POST['phone']) != $phonelength)  //cal phone length
	{
		$message = "invalid phone number!";
	}
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid email address please type a valid email!";
    }
    elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'username Already exists!';
     }
	elseif(mysqli_num_rows($check_email) > 0) //check email
     {
    	$message = 'Email Already exists!';
     }

    else{

        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
       


        $mql = "INSERT INTO user_data(username, password, fname, lname, birthday, email, phone, address) VALUES('$username', '$password','$fname', '$lname', '$birthday', '$email', '$phone', '$address')";
	    mysqli_query($db, $mql);
		$success = "Account Created successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";
		
		
		
		
		 header("refresh:3;url=login.php"); // redirected once inserted success
        }
   
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSignup2.css">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sign Up</title>
</head>
<body>
    <div id="scrollPath"></div>
    <?php
        include("header3.php")
    ?>
    <div class="logcen">
        <div class="login-wrapper">
            <form action="" method ="post">
                <h1>SIGN UP</h1>
                
                <div class="input-box">
                    <input type="text" placeholder="Username" name ="username">
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name ="password">
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" name ="cpassword">
                </div>
    
                <div class="input-box">
                    <input type="text" placeholder="First Name" name ="fname">
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Last Name" name ="lname">
                </div>

                <div class="input-box">
                    <input type="date" placeholder="Birthday" name ="birthday">
                </div>

                <div class="input-box">
                    <input type="email" placeholder="Email" name ="email">
                </div>

                <div class="input-box">
                    <input type="number" placeholder="Phone" name ="phone">
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Address" name ="address">
                </div>
        
                <button class="next" type="submit" value ="submit" name ="submit"> Register </button>
                <br>
                <span style="color:red;"><?php echo $message; ?></span>
                <span style="color:#00ffcc;"><?php echo $success; ?></span>
                <div class="register-link">
                    <p class="p">Already have an account? <a href="login.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php
        include("footer.html")
    ?>
</body>
</html>