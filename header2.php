<?php
    session_start();
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); 

    if(isset($_SESSION["user_id"])) {

        $mm = $_SESSION["user_id"];

        $dbinfo = "SELECT username FROM user_data where id = '$mm'";
        $dbresult = mysqli_query($db,$dbinfo);
        $rt = mysqli_fetch_array($dbresult);

        $name = $rt['username'];
     }


?>
<link rel="stylesheet" href="styleHeader2.css">
<header>
    
    <a href="index.php" class="logo" >
       <img src="img/nox_logo.png" height="75" class="logos">
    <ul class="navbar">
        <li><a href='index.php' class="home-active">Home</a></li>
        <li><a href='menu.php' class="menu">Menu</a></li>
        <li><a href="#orders" class="orders">Orders</a></li>
        <li><a href="feedback.php" class="feedback">Feedback</a></li></div>
    </ul>
    
    <div class="usercirc">
        <img src="img/userimg.png" alt="" class="userimg">
        <ul>
            <li><a href="#user"><span><?php echo $name; ?></a>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="#orders">Orders</a></li>
                <li><a href="#track">Track Order</a></li>
                <li><a href="logout.php" value ="logout">Logout</a></li>
            </ul>
            </li>
        </ul>
    </div>
</header>