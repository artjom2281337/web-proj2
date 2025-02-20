<?php
require 'db.php';
session_start();

$item_id = $_GET["id"];

$sql = "SELECT * FROM items WHERE itemid='$item_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $item_name = $row['item_name'];
        $type = $row['item_type'];
        $item_company = $row['company'];
        $item_image = $row['img'];
        $item_price = $row['price'];
        $item_price_per_kg = $row['price_kilo'];
        $item_country = $row['country'];
        $ingred = $row['ingred'];
        $allerg = $row['allergies'];
        $item_favorite = false;

        if (isset($_SESSION['userid'])) {
            $fav_sql = "SELECT * FROM fav_items WHERE userid='$_SESSION[userid]' AND itemid='$_GET[id]'";
            $fav_result = $conn->query($fav_sql);
            if ($fav_result->num_rows > 0) {
                $item_favorite = true;
            }
        }

    }
}

$conn->close();

$title = "Item Page";
$css_file = "item";
$desc = "Consume our fresh  MMarket " . $item_name . ", a delicious piece of " . $type . ". Perfect for your meals!";

include("header.php");
?>

<main id="item-display">
    <span id="item-category"><a href="#">Food</a> > <?php echo "<a href='search.php?query=$type'>" . ucfirst($type) . "</a>"; ?> > <a
            href=""><?php echo ucfirst($item_name); ?></a></span>
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
                <button id="item-add-to-cart">
                    <a href="add_to_cart.php?id=<?php echo $item_id; ?>&quantity=1">Add to cart</a>
                </button>
                <form action="<?php echo $item_favorite ? 'remove_fav.php' : 'add_to_fav.php'; ?>" method="GET">
                    <input type="hidden" name="id" value="<?php echo $item_id; ?>">
                    <button type="submit" id="item-add-to-fav">
                        <img src=<?php echo $item_favorite ? "img/full_heart.png" : "img/heart.png"; ?>>
                    </button>
                </form>
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