<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMarket - <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href=<?php echo "css/$css_file.css"; ?>>
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
                <div class="logo-container">
                    <img src="img/logo.png" alt="MMarket Logo">
                    <h1>MMarket</h1>
                </div>
            </a>
        </div>

        <div class="searchbar">
            <div id="seachbar-div">
                <input type="search" size="45" placeholder="Search...">
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

    <nav id="resp-nav"> <!-- had to be seperated from the header for responsiveness-->
        <div id="logo-div-nav">
            <div class="logo-container">
                <img src="img/logo.png" alt="MMarket Logo">
                <h1>MMarket</h1>
            </div>
            <button id="menu-button2"><img src="img/close.png" alt="X"></button>

        </div>
        <div id="nav-content">
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="cart.php">Go to Cart</a></li>
                <li><a href="#">Popular items</a></li>
                <li><a href="#">Discounted items</a></li>
                <li><a href="#">Why us?</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>

        <div class="button-n">Nearest MM</div>

        <ul>
            <li><a href="#">Submit a feedback</a></li>
            <li><a href="#">Preferences</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li> <!-- should only appear while logged in, maybe whole ul? -->
        </ul>

        <ul class="nav-bottom">
            <li><span>MMarket</span></li>
            <li><span><?php echo date(DATE_RFC822); ?></span></li> <!-- https://www.w3schools.com/php/func_date_date.asp -->
            <li><span><b>© All rights reversed.</b></span></li>
        </ul>

    </nav>