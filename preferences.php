<!DOCTYPE html>
<html lang="en">
    <?php
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); // hide undefine index errors
    session_start(); // temp sessions

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePreferences.css">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Preferences</title>
</head>
<body>
    <div id="scrollPath"></div>
    <?php
        include("header3.php")
    ?>
    <div class="logcen">
        <div class="login-wrapper">
                <h1>CHOOSE YOUR PREFERENCES</h1>
                <p>This will help us reccommend similar beverages and dishes that suits your taste.</p>
                    <main>
                    </main>
                    <script src="funcs/JSpreferences.js"></script>
                    <div class="btnss">
                        <a href="index.php" class="Prof"><p>Confirm</p></a>
                        <div class="slct">
                            <input type="checkbox" onClick="toggle(this)" /> Select All<br/>
                        </div>
                    </div>
        </div>
    </div>
    <?php
        include("footer.html")
    ?>
</body>
</html>