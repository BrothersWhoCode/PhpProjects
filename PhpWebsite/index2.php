<?php
include_once "C:\Documents\projects\php\database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$email = $_POST["email"];
$password = $_POST["password"];
$User_name = $_POST["User_name"];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/b821db85cf.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
<h3>Username</h3>
<input type="text" name="User_name" id="">
<h3>Email</h3>
<input type="email" name="email">
<h3>Password</h3>
<input type="password" name="password">
<input type="submit" value="submit">
<a href="index.php"><i class="fas fa-home"></i></a>
</form>
</body>
</html>