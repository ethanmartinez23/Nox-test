<?php

    session_start();
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); 

        $mm = $_SESSION["user_id"];

        $dbinfo = "SELECT username FROM user_data where id = '$mm'";
        $dbresult = mysqli_query($db,$dbinfo);
        $rt = mysqli_fetch_array($dbresult);

        $name = $rt['username'];
        $choice = $_POST['choice'];
        $message = $_POST['message'];
        $to = "keigonzales09@gmail.com";
        $subject = "Feedback from Customer";


        $txt = '<h2> Email Received </h2>';

        $headers = "From no reply@yoursite.com";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

     
     $result = mail($to,$subject,$txt,$headers);

     if($result) {

     }
    
?>
