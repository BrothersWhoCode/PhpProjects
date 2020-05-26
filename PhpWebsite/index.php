<?php

include_once "C:\Documents\projects\php\database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$email = $_POST["email"];
$password = $_POST["password"];
$User_name = $_POST["User_name"];

}

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit-icons.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<h1>Myths</h1>
<?php echo "{$User_name}"?>
<ul class="links">
<li><a href="#">Storys</a></li>
<li><a href="#">Chat</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Login</a></li>
<li><a class="sign">Sign up</a></li>
</ul>
</header>
<section class="form">
<form method="POST">
<h3>Username</h3>
<input type="text" name="User_name" id="">
<h3>Email</h3>
<input type="email" name="email">
<h3>Password</h3>
<input type="password" name="password">
<input type="submit" value="submit">
</form>
</section>
<hr>

<h1>Top Storys</h1>
<section class="top">

</section>

<footer>


</footer>


</body>
</html>