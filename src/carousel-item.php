<?php

// TODO: Get data from database with $id
if ($dicsount) {
    $class = "carousel-item-discount";
} else {
    $class = "carousel-item";
}

$item_name = "Banana";
$item_image = "img/items/banana.png";
$item_price = 1.03;
$item_price_per_kg = 5.91;
$item_favorite = true;

?>

<div class=<?php echo $class; ?>>
    <div class="main-items-1-div-top">
        <div class="main-items-1-div-top-head">
            <span class="discount-tag">Discount!</span>
            <button class="favorite-button">
            <img src=<?php if ($item_favorite) {
                            echo "img/full_heart.png";
                        } else { echo "img/heart.png"; }?>>
                <param name="item-id" value=<?php echo $id; ?>>
            </button>
        </div>        
        <img src=<?php echo "$item_image alt=$item_name"; ?> onclick="goToItem(<?php echo $id; ?>)">
    </div>
    <div class="main-items-1-div-bot">
        <p><?php echo $item_name; ?></p>
        <div class="main-items-1-div-bot-price">
            <span><?php echo "$item_price €"; ?></span> <br>
            <span><?php echo "$item_price €"; ?>/kg</span>
        </div>
        <button><a href=<?php echo "cart.php?id=$id"; ?>>Add to cart!</a></button>
    </div>
</div>