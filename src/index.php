<?php
    session_start();

    $title = "Main Menu";
    $css_file = "index";
    $desc = "Shop freshest groceries online in MMarket! Buy high-quality fruits, vegetables, dairy, and meats delivered to your doorstep."
    ?>
    <?php include("header.php"); ?>

    <?php $loggedIn = isset($_SESSION["userid"]); ?>

    <main id="main-main">
        <section id="main-membership">
            <div id="main-mem-info">
                <h1>Are you still not a member
                    Of MMarket yet? No worries!</h1>
                <p>We provide good quality products if you support us. We
                    keeps are fruits clean and vegetables fresh, because of
                    you! You can help us accomplishing this mission.</p>
                    <button onclick="goToLogin()">Become a member now!</button>
            </div>
            <div id="main-mem-img">
                <img src="img/member.png">
            </div>
        </section>

        <section class="main-items-1">
            <h1>Products that might interest you</h1>
            <p>We made these suggestions based on discount rates, user ratings and popularity.</p>
            <div class="carousel-container">
                <div class="carousel">
                <?php
                        $dicsount = false;
                    
                        
                        for ($i = 1; $i < 5; $i++) {
                            $id = $i;
                            include("carousel-item.php");
                        }
                    ?>
                </div>
            </div>
        </section>

        <section id="main-app-sec">
            
                <div id="main-app-info">
                    <h1>Download our app for more</h1>
                    <p>We are supplying the best discounts on
                        the universe. Better not miss out!</p>
                    <img src="img/mobile.png" alt="">
                </div>
            
            <div id="main-app-img">
                <img src="img/appimg.jpg">
            </div>
        </section>

        <div id="main-discount">
            <h1>Great Discounts</h1>
            <p>You shouldn't miss these or you might cry in your sleep.</p>
            <div class="carousel-container">
                <div class="carousel">
                    <?php
                        $dicsount = true;

                        require "db.php";

                        $sql = "SELECT itemid FROM items WHERE isDiscount";
                        $result = $conn -> query($sql);
                        $arr = [];

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                $arr[] = $row["itemid"];
                            }
                        }
                        
                        foreach ($arr as $id) {
                            include("carousel-item.php");
                        }
                    ?>
                </div>
            </div>
        </div>

        <section id="main-recommend">
            <h1>Why should you prefer us?</h1>
            <div id="main-recommend-container">
                <div class="main-rec">
                    <img src="img/preferimg.jpg">
                    <h2>Awarding Service</h2>
                    <p>By using our service, you are already awarded with the shortest lead time and quality products at the best prices.</p>
                </div>
                <div class="main-rec">
                    <img src="img/preferimg.jpg">
                    <h2>Fast and Secure</h2>
                    <p>Your time and safety matter to us. With our fast delivery options and secure payment systems, you can enjoy fresh groceries at your doorstep without any hassle.</p>
                </div>
                <div class="main-rec">
                    <img src="img/preferimg.jpg">
                    <h2>Quality</h2>
                    <p>We source only the finest products. From farm-fresh produce to premium pantry staples, every item is carefully selected to meet the highest standards of quality and freshness.</p>
                </div>
            </div>
        </section>

        <section id="main-job">
            <div id="main-job-img-div">
                <img src="img/job.avif">
            </div>
            <div id="main-job-info">
                <h2>Job applications</h2>
                <p>Join MMarket and be part of a team that delivers quality and convenience! Grow, innovate, and make an impact in a dynamic environment. Bring your skills, passion, and creativity — apply today and start your rewarding career with us!</p>
                <a href="job.php"><button>Take me to the job opportunities</button></a>
            </div>
        </section>

    </main>

    
<?php 
    include("footer.php");
?>