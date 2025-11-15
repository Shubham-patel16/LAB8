<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Client";

$Connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$Connection) {
    die("Connection failed: " . mysqli_connect_error());
}
