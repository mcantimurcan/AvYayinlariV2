<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "avyayindb";

//creating database connection
$con = mysqli_connect($host, $username, $password, $database);

//checking database connection
if(!$con){
    die("connection failed". mysqli_connect_error());
}

?>