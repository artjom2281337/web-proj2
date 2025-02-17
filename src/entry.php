<?php
    $title = "Login";
    $css_file = "entry";
    include("header.php");
?>

    <article>
        <div id="container">
            <div class="top-row">
                <a href="index.php"><img src="img/entry-icon.png" alt="Entry icon"></a>
            </div>
            <div class="choice">
                <button type="button" id="login" class="active" onclick="setActive('login', 'register')">LOGIN
                    <div></div>
                </button>
                <button type="button" id="register" class="inactive" onclick="setActive('register', 'login')">REGISTER
                    <div></div>
                </button>
            </div>
            <iframe class="login-height" id="entry-container" src="login.html" frameborder="0"></iframe>
        </div>
    </article>
    
<?php 
    include("footer.php");
?>