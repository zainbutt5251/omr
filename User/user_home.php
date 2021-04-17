<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul class="nav navbar-nav menu_nav ml-auto">
								<?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
								?>
								
								<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
								<?php	
								} else{
								?>
								<li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
								<?php
								
								}
								?>
								
							<li class="nav-item"><a class="nav-link" href="signup.php">Register</a></li>
							</ul>
    
</body>
</html>  
      