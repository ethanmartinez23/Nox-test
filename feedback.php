<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); 
    if(isset($_SESSION["user_id"])) {

        require_once("header2.php");

        $mm = $_SESSION["user_id"];

        $dbinfo = "SELECT username FROM user_data where id = '$mm'";
        $dbresult = mysqli_query($db,$dbinfo);
        $rt = mysqli_fetch_array($dbresult);

        $name = $rt['username'];
     }
     else{  
        require_once("header1.php");
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFeedback.css">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sign Up</title>
</head>
<body>
    <div id="scrollPath"></div>

    <div class="logcen">
        <div class="login-wrapper">
        <form action="https://formspree.io/f/maygewyw" method="POST">
                <h1>SEND A FEEDBACK</h1>
                <p>Send us a feedback on things we can improve with our services and this website</p>
                
                
                <div class="input-box">
                    <input type="text" name = "Name" placeholder = "<?php echo $name; ?>" >
                </div>
                
                <div class="cmbobx">
                    <select name=" Feedback Type " onChange="combo(this, 'demo')" name = "choice">
                        <option>Complaint</option>
                        <option>Suggestion</option>
                        <option>Commendation</option>
                    </select>
                </div>
                

                <div class="input-box1">
                    <textarea id="message" name="Message" rows="5" cols="50" placeholder="Feedback here..."></textarea>
                </div>
        
                <input type="submit" class="next"  value = "Submit" >
            </form>
        </div>
    </div>
    <?php
        include("footer.html")
    ?>
</body>
</html>