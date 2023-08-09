<?php

//connection file for admin and users
$servername = "localhost"; //server
$db_username = "root"; //username
$db_password = ""; //password
$dbname = "nox";  //database

// Create connection
$db = mysqli_connect($servername, $db_username, $db_password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}
?>