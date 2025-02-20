<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>MMarket - <?php echo $title; ?></title>
    <?php 
        if (!empty($desc)) {
            echo '<meta name="description" content="' . $desc . '">';
        }
    ?>
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
                <form method="get" action="search.php">
                    <input type="search" name="query" size="45" placeholder="Search...">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </form>
            </div>
        </div>

        <div class="entry">
            <?php if (isset($_SESSION["userid"])): ?> 
                <a href="logout.php">
                    <button id="login-button">
                        <img src="img/logout.png" alt="Logout">
                        <span>Logout</span>
                    </button>
                </a>
            <?php else: ?> 
                <a href="entry.php">
                    <button id="login-button">
                        <img src="img/user.png" alt="Login">
                        <span>Login</span>
                    </button>
                </a>
            <?php endif; ?>
        </div>


        <div class="cart">
            <a href="cart.php">
                <button id="cart-button">
                    <img src="img/cart.png" alt="Cart">
                </button>
            </a>
        </div>

    </header>

    <nav id="resp-nav"> 
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
            <?php if (isset($_SESSION["userid"])): ?>
                <li><a href="#">Preferences</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>

        <ul class="nav-bottom">
            <li><span>MMarket</span></li>
            <li><span><?php echo date(DATE_RFC822); ?></span></li>
            <li><span><b>© All rights reversed.</b></span></li>
        </ul>

    </nav>