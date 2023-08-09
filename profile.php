<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); // hide undefine index errors
     // temp sessions

        

     if(isset($_SESSION["user_id"])) {

        $mm = $_SESSION["user_id"];

        $dbinfo = "SELECT username, fname, lname, birthday, email, phone, address FROM user_data where id = '$mm'";
        $dbresult = mysqli_query($db,$dbinfo);
        $rt = mysqli_fetch_array($dbresult);

        $name = $rt['username'];
        $firstname = $rt['fname'];
        $lastname = $rt['lname'];
        $birthd = $rt['birthday'];
        $mail = $rt['email'];
        $num = $rt['phone'];
        $add = $rt['address'];

     }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleProfile.css">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Profile</title>
</head>
<body>
    <div id="scrollPath"></div>
    <?php
        include("header2.php")
    ?>
     <form action="" method = "get">
    <div class="userprof">
        <div class="userinfobx"></div>
        <div class="userimgbx"></div>
        <div class="userimgcirc1">
            <img src="img/userimg.png" alt="">
        </div>
        <div class="cameraicon"></div>
        <div class="infobx"></div>
        <div class="usernamebx">
            <h1>USER PROFILE</h1>  
            <h3><span><?php echo $name; ?></span></h3>
            <button class="btn">
                <img src="img/editicon.png" alt="">
            </button>

            <button class="changepass">
                CHANGE PASSWORD
            </button>
            
            <div class="infobx1">
                <div class="inf1">
                    <div class="box">
                        <p class="p1">FIRST NAME</p>
                        <p class="p2"><span><?php echo $firstname; ?></span></p>
                    </div>
                    <div class="box">
                        <p class="p1">LAST NAME</p>
                        <p class="p2"><span><?php echo $lastname; ?></span></p>
                    </div>
                </div>

                <div class="inf3">
                    <div class="box1">
                        <p class="p1">EMAIL</p>
                        <p class="p2"><span><?php echo $mail; ?></span></p>
                    </div>
                </div>
        
                <div class="inf2">
                    <div class="box">
                        <p class="p1">BIRTHDAY</p>
                        <p class="p2"><span><?php echo $birthd; ?></span></p>
                    </div>
                    <div class="box">
                        <p class="p1">PHONE</p>
                        <p class="p2"><span><?php echo $num; ?></span></p>
                    </div>
                </div>

                <div class="inf3">
                    <div class="box1">
                        <p class="p1">ADDRESS</p>
                        <p class="p2"><span><?php echo $add; ?></span></p>
                    </div>
                </div>
            </div>
        </div>

        <section id="orders">
            <div class="orderhistory" id="order">
                <div class="ordrbox">
                    <h1>ORDERS HISTORY</h1>
                    <p>JULY 28, 2023</p>
                    <div class="ordritems">
                        <div class="ordrimg">
                            <img src="img/ordrdrink.png" alt="">
                        </div>
                        <div class="ordrinfo">
                            <div class="infotags">
                                <p>Order Name: </p>
                                <p>Order ID: </p>
                                <p>Date Ordered: </p>
                                <p>Time Ordered: </p>
                            </div>
                            <div class="infotags">
                                <p>Cappucino Latte </p>
                                <p>JHFA67S </p>
                                <p>June 28 2023 </p>
                                <p>16:30 </p>
                            </div>
                            <div class="reorder">
                                <a href="#reorder">RE-ORDER</a>
                            </div>
                        </div>
                    </div>

                    <div class="ordritems">
                        <div class="ordrimg">
                            <img src="img/ordrdrink.png" alt="">
                        </div>
                        <div class="ordrinfo">
                            <div class="infotags">
                                <p>Order Name: </p>
                                <p>Order ID: </p>
                                <p>Date Ordered: </p>
                                <p>Time Ordered: </p>
                            </div>
                            <div class="infotags">
                                <p>Cappucino Latte </p>
                                <p>JHFA67S </p>
                                <p>June 28 2023 </p>
                                <p>16:30 </p>
                            </div>
                            <div class="reorder">
                                <a href="#reorder">RE-ORDER</a>
                            </div>
                        </div>
                    </div>

                    <div class="ordritems">
                        <div class="ordrimg">
                            <img src="img/ordrdrink.png" alt="">
                        </div>
                        <div class="ordrinfo">
                            <div class="infotags">
                                <p>Order Name: </p>
                                <p>Order ID: </p>
                                <p>Date Ordered: </p>
                                <p>Time Ordered: </p>
                            </div>
                            <div class="infotags">
                                <p>Cappucino Latte </p>
                                <p>JHFA67S </p>
                                <p>June 28 2023 </p>
                                <p>16:30 </p>
                            </div>
                            <div class="reorder">
                                <a href="#reorder">RE-ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
        
        
        
    </div>
   <footer></footer>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
