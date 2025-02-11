<?php
    $title = "Login";
    $css_file = "entry";
    include("header.php");
?>

    <article>
        <div id="container">
            <div class="top-row">
                <a href="index.html"><img src="img/entry-icon.png" alt="Entry icon"></a>
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
    <footer>
        <div class="footer-section">
            <h3>MMArket</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Trading Guide</a></li>
                <li><a href="#">Frequently Asked Questions</a></li>
                <li><a href="#">Customer Service</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Information Text</a></li>
                <li><a href="#">Personal</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Popular pages</h3>
            <ul>
                <li><a href="#">Seasonal Vegetables</a></li>
                <li><a href="#">Ice Cream</a></li>
                <li><a href="#">Beef</a></li>
                <li><a href="#">Mask</a></li>
                <li><a href="#">Long Lasting Milk</a></li>
                <li><a href="#">NVIDIA RTX 4090</a></li>
                <li><a href="#">Exotic Fruits</a></li>
                <li><a href="#">Shotgun</a></li>
                <li><a href="#">Eggs</a></li>
                <li><a href="#">Hair Care</a></li>
                <li><a href="#">Paper Towel</a></li>
                <li><a href="#">Fortnite Battlepass</a></li>
                <li><a href="#">Toilet Paper</a></li>
                <li><a href="#">Olive Oil</a></li>
                <li><a href="#">Shave Knife</a></li>
                <li><a href="#">Turkish Coffee</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Our news</h3>
            <ul>
                <li><a href="#">Hello MMarket</a></li>
                <li><a href="#">MMarket TV</a></li>
                <li><a href="#">MMarket Card</a></li>
                <li><a href="#">My Healthy Life Travel</a></li>

            </ul> <br> <br>
            <h3>Mobile Applications</h3>
            <div class="app-icons">
                <img src="img/mobile.png">
            </div>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <img src="img/instagram.png" alt="Instagram">
                <img src="img/facebook.png" alt="Facebook">
                <img src="img/youtube.png" alt="YouTube">
                <img src="img/x.png" alt="X">
                <img src="img/linkedin.png" alt="LinkedIn">
            </div> <br>
            <div class="button-n">Nearest MM</div>
        </div>
    </footer>

    <script src="js/entry.js"></script>
</body>
</html>