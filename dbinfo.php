<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "Database";

$con = new mysqli($host, $username, $password, $db);

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

?>