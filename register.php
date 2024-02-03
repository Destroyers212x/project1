<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="index.js" rel="script">
    <title>Green Shop</title>
    <link rel="icon" type="image/x-icon" href="Favicon/favicon.ico">
</head>

<div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
        <a href="Home.php">home</a>
        <a href="Checkout.php">cart</a>
        <a href="login.php">Login</a>
        <a href='register.php'>Register</a>
    </div>
</div>
<body>
<header>
        <h1>Register</h1>   
</header>
<div class="box">   
    <form action="connection.php" method='POST'>
        
        <div class='input-box'>       
        <input type="username" name="username" id="username" placeholder='username' required>
        <i class='bx bxs-user'></i>
        </div>
        <div class='input-box'>
        <input type='password'name='password' placeholder='password' required>
        <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class='input-box'>
        <input type='email'name='email' placeholder='email' required>
        <i class='bx bxs-envelope'></i>        
        </div>
        <button type='submit' name='submit'>Submit</button>
    </form>
</div>