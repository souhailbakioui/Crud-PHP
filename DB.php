<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpvisiteurs";

// Create connection
try{
    $conn = @mysqli_connect($servername, $username, $password,$dbname);
}
catch(Exception $e){
    die("Connection failed ");
}
$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        


echo "Connected successfully";
?> 