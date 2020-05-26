<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "Loveself1";
$dbname = "phpm";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 echo "<h3>Connected successfully</h3>";
?>