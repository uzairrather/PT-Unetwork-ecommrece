<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pt-unetwork";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry connection failed" . mysqli_connect_error());
}



?>