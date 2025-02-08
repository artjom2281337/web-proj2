<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMarket - <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href=<?php echo "css/$css_file.css"?>>
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <header>
        
        <div class="menu">
            <button id="menu-button">
                <img src="img/menu.png" alt="Menu">
            </button>
        </div>

        <div class="logo">
            <a href="index.php">
                <div id="logo-container">
                    <img src="img/logo.png" alt="MMarket Logo">
                    <h1>MMarket</h1>
                </div>
            </a>
        </div>

        <div class="searchbar">
            <div id="seachbar-div">
                <input type="text" size="45" placeholder="Search...">
            </div>
        </div>
        
        <div class="entry">
            <a href="entry.php">
                <button id="login-button">
                    <img src="img/user.png" alt="Login">
                    <span>Login</span>
                </button>
            </a>
        </div>  

        <div class="cart">
            <a href="cart.php">
                <button id="cart-button">
                    <img src="img/cart.png" alt="Cart">
                </button>
            </a>
        </div>

    </header>