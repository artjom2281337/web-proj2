<?php
require 'test/db.php';
session_start();

$search = $_GET['query'];
$search_results = [];

if ($search != "") {
    $sql = "SELECT * FROM items WHERE item_name LIKE '%$search%' OR item_type LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row;
        }
        $result_count = count($search_results);
    }

}

$title = "Search Page";
$css_file = "search";
include("header.php");
?>

<main id="search-main">
    <h2>Search results for "<?php echo $search; ?>"</h2>
    <span><?php echo $result_count ?> results</span>
    <div id="search-results">
        <?php foreach ($search_results as $item): ?>
            <div class="search-item">
                <div class="search-item-top">
                    <div class="search-item-top-head">
                        <?php if ($item['isDiscount']): ?>
                            <span class="discount-tag">Discount!</span>
                        <?php else: ?>
                            <span> </span> <!-- to keep heart on right -->
                        <?php endif; ?>
                        <?php
                        $user_id = $_SESSION['userid'];
                        $item_id = $item['itemid'];
                        $is_favorite = false;

                        $fav_sql = "SELECT * FROM fav_items WHERE userid = $user_id AND itemid = $item_id";
                        $fav_result = $conn->query($fav_sql);

                        if ($fav_result->num_rows > 0) {
                            $is_favorite = true;
                        }
                        ?>

                        <button
                            onclick="location.href='<?php echo $is_favorite ? 'remove_fav.php' : 'add_to_fav.php'; ?>?id=<?php echo $item_id; ?>'">
                            <img src="<?php echo $is_favorite ? 'img/full_heart.png' : 'img/heart.png'; ?>" alt="">
                        </button>
                    </div>
                    <img src="<?php echo $item['img']; ?>" alt="">
                </div>
                <div class="search-item-bot">
                    <p rows="3"><?php echo $item['item_name']; ?> <br><br></p>
                    <div class="search-item-price">
                        <span><?php echo $item['price']; ?>€</span> <br>
                        <span><?php echo $item['price_kilo']; ?>€/kg</span>
                    </div>
                    <button><a href="item.php?id=<?php echo $item['itemid']; ?>">Add to cart!</a></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php

$conn->close();

include("footer.php");
?>