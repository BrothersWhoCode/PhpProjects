<?php

include_once "C:\Documents\projects\php\database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$email = $_POST["email"];
$password = $_POST["password"];
$User_name = $_POST["User_name"];
$submit = $_POST["submit"];
}



?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
      <script src="index.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<h1>Myths</h1>
<img src="" alt="">
<ul class="links">
<li><a href="#">Storys</a></li>
<li><a href="#">About</a></li>
<li><a class="Log" href="#">Login</a></li>
<li><a class="sign" onclick="form()">Sign up</a></li>
<?php echo "<h3>{$User_name}</h3>"?>
</ul>
</header>
<section class="form">
<form method="POST">
<h3>Username</h3>
<input type="text" name="User_name" class="Name">
<h3>Email</h3>
<input type="email" name="email" class="Email">
<h3>Password</h3>
<input type="password" name="password" class="Password">
<input type="submit" value="submit" class="submit">
</form>
</section>
<hr>

<h1>Top Storys</h1>
<section class="top">
<input type="image" src="" alt="">
</section>

<footer>


</footer>


<style>
html{
    background:#091f36;
    width: 100%;
    height: 100%;
    text-decoration: none;
    
  }
  
  header a{
    color:#091f36;
    position:relative;
    bottom:40px;
  }

  header a:hover{
    color: #091f36;
    text-decoration: none;
    
  }
  
  .links{
      display:grid;
      grid-template-columns:1fr 1fr 1fr 1fr 1fr;
  }
  
  li{
      list-style:none;
      
  }
   a{
    background:#9e363a;
    padding:5px;
    border-radius:5px;
    text-decoration: none;
      
  }
  
  a:hover{
      padding:7px;
      transition:.7s ease-in-out;
  }

  .form{
    position: relative;
    left: 1400px;
  }

h1{
  color:white;
}

h3{
  color:white;

}

.submit{
  color:#091f36;
  background:#9e363a;
  border:none;
  border-radius:5px;
  padding:5px;

}

.Name{
 background:#4f5f76;
 border:none;
 outline:none;
}

.Email{
  background:#4f5f76;
  border:none;
  outline:none;
}

.Password{
  background:#4f5f76;
  border:none;
  outline:none;
}

</style>

</body>
</html>