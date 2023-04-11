<?php

//Params to connect to a database
// $dbHost = "localhost";
$dbhost = '127.0.0.1';
$dbUser = "root";
$dbPass = "";
$dbName = "alternakraft";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>
