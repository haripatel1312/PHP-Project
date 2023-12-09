<?php
//connection logic
$host = "localhost:8080";
$username = "root";
$password = "";
$dbname = "php_schema";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



