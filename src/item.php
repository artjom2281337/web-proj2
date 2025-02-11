<?php

    // HTML variables
    $title = "Item Page";
    $css_file = "item";

    // ID of item to load
    $item_id = $_GET["id"];
    
    // Database variables
    // TODO: Get this information from database
    $item_name = "Banana";
    $type = "Fruit";
    $item_company = "Mother Nature co.";
    $item_image = "img/items/banana.png";
    $item_price = 1.03;
    $item_price_per_kg = 5.91;
    $item_country = "Guatemala";
    $item_favorite = true;
    
    include("header.php");
?>

    <main id="item-display">
        <span id="item-category"><a href="#">Food</a> > <?php echo "<a href='$type'> $type </a>"; ?> > <a href=""><?php echo $item_name ?></a></span>
        <article id="display-div">
            <section id="item-top">
                <div id="item-image">
                    <img src=<?php echo "$item_image alt=$item_name"; ?>>
                </div>
                <div id="item-name">
                    <h1><?php echo $item_name; ?></h1>
                    <span id="item-provider"><?php echo $item_company; ?> </span>
                </div>
                <div id="item-price">
                    <p id="price-of-one"><?php echo "$item_price €"; ?></p>
                    <p id="price-of-kilo"><?php echo "$item_price_per_kg €"; ?>/kg</p>
                </div>
                <div id="item-buttons">
                    <button id="item-add-to-cart"><a href="cart.php">Add to cart</a></button>
                    <button id="item-add-to-fav" onclick="favoriteItemClick(this)" >
                        <img src=<?php if ($item_favorite) {
                            echo "img/full_heart.png";
                        } else { echo "img/heart.png"; }?>>
                        <param name="item-id" value=<?php echo $item_id; ?>>
                    </button>
                </div>
            </section>

            <section id="item-info">
                <span id="info-title">Product Information</span>
                <section id="item-info-div">
                    <div class="info-div">
                        <img src="img/company.png" alt="">
                        <div>
                            <span>Country</span> <br>
                            <span><?php echo $item_country; ?></span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/origin.png" alt="">
                        <div>
                            <span>Company</span> <br>
                            <span><?php echo $item_company; ?></span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/contains.png" alt="">
                        <div>
                            <span>Ingredients</span> <br>
                            <span>Deadly amount of potassium</span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/allergens.png" alt="">
                        <div>
                            <span>Allergens</span> <br>
                            <span>None</span>
                        </div>
                    </div>
                </section>
            </section>
        </article>
    </main>

<?php
    include("footer.php");
?>