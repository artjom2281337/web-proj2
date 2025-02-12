<?php

    // HTML variables
    $title = "Item Page";
    $css_file = "item";

    // ID of item to load
    $item_id = $_GET["itemid"];
    
    // Database variables
    // TODO: Get this information from database

    require 'test/db.php' ;

    $sql = "SELECT * FROM items WHERE itemid='$item_id'";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        $row = $result -> fetch_assoc();

    $item_name = $row['item_name'];
    $type = $row['item_type'];
    $item_company = $row['company'];
    $item_image = $row['img'];
    $item_price = $row['price'];
    $item_price_per_kg = $row['price_kilo'];
    $item_country = $row['country'];
    $ingred= $row['ingred'];
    $allerg= $row['allergies'];
    $item_favorite = true;

    }

    
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
                            <span><?php echo $ingred; ?></span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/allergens.png" alt="">
                        <div>
                            <span>Allergens</span> <br>
                            <span><?php echo $allerg ?></span>
                        </div>
                    </div>
                </section>
            </section>
        </article>
    </main>

<?php
    include("footer.php");
?>