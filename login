<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.js">
    <title>Green Shop</title>
    <link rel="icon" type="image/x-icon" href="Favicon/favicon.ico">
</head>

<div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
        <a href="Home">home</a>
        <a href="Checkout">cart</a>
        <a href="login">Login</a>
    </div>
</div>
<body>
    <header>
            <h1>Green Shop</h1>
    </header>
 <style>
    body{
        background-color: grey;
        min-height: 100vh;
     }
 </style>
    <div class="wrapper">
        <form action="connection" method="POST">
            <h2>login</h2>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="username" value="" required />
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="password" id="password" placeholder="password" value="" required />
                <i class='bx bxs-lock-alt' ></i>
            </div>
        <div class="remeber-forgot">
            <label><input type="checkbox" name="remember"  id="rememberme">Remember Me</label>
            <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="Register">
            <p>Don't Have an account?<a href='#'>Click here</a></p>
        </div> 
        </form>

    </div>
</form>
</body>
</html>
