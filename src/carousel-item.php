<?php
    require 'test/db.php' ;

    if ($dicsount) {
        $class = "carousel-item-discount";
    } else {
        $class = "carousel-item";
    }

    // Load item
    $sql = "SELECT * FROM items WHERE itemid='$id'";
    $result = $conn -> query($sql);

    // Get data
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
            
        }
    }

?>

<div class=<?php echo $class; ?>>
    <div class="main-items-1-div-top">
        <div class="main-items-1-div-top-head">
            <span class="discount-tag">Discount!</span>
        </div>        
        <img src=<?php echo "$item_image alt=$item_name"; ?> onclick="goToItem(<?php echo $id; ?>)">
    </div>
    <div class="main-items-1-div-bot">
        <p><?php echo $item_name; ?></p>
        <div class="main-items-1-div-bot-price">
            <span><?php echo "$item_price €"; ?></span> <br>
            <span><?php echo "$item_price_per_kg €"; ?>/kg</span>
        </div>
        <button><a href=<?php echo "item.php?id=$id"; ?>>Add to cart!</a></button>
    </div>
</div>