<?php
    require 'test/db.php' ;

// TODO: Get data from database with $id
if ($dicsount) {
    $class = "carousel-item-discount";
} else {
    $class = "carousel-item";
}


    // ID of item to load
    $item_id = $_GET["itemid"];

    $sql = "SELECT * FROM items WHERE itemid='$item_id'";
    $result = $conn -> query($sql);


    if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()){

            
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
    }
    $conn->close();

?>

<div class=<?php echo $class; ?>>
    <div class="main-items-1-div-top">
        <div class="main-items-1-div-top-head">
            <span class="discount-tag">Discount!</span>
            <button class="favorite-button">
            <img src=<?php if ($item_favorite) {
                            echo "img/full_heart.png";
                        } else { echo "img/heart.png"; }?>>
                <param name="item-id" value=<?php echo $item_id; ?>>
            </button>
        </div>        
        <img src=<?php echo "$item_image alt=$item_name"; ?> onclick="goToItem(<?php echo $id; ?>)">
    </div>
    <div class="main-items-1-div-bot">
        <p><?php echo $item_name; ?></p>
        <div class="main-items-1-div-bot-price">
            <span><?php echo "$item_price €"; ?></span> <br>
            <span><?php echo "$item_price_per_kg €"; ?>/kg</span>
        </div>
        <button><a href=<?php echo "cart.php?id=$item_id"; ?>>Add to cart!</a></button>
    </div>
</div>