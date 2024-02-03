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
        <h1>Green Shop</h1>
    </header>

    <section id="products">
        <!-- Product Template -->
        <div class="product 1">
            <a href="Checkout"><img id="apple_watch" src="Product pictures/Apple watch photo.jpg" alt="Product 1"></a>
            <p> Misxi 2 Pack Hard PC Case with Tempered Glass Screen Protector Compatible with Apple Watch Series 6 SE Series 5 Series 4 44mm, Black </p>
            <p class="price">$19.99</p>
         <a href="Checkout.php">
            <button id="apple_watch" class="apple_watch" onclick="checkIfExists()">Add to Cart</button>
          </a>
        </div>
        

        <!-- Repeat the above template for more products -->
    </section>
</body>
</html>
