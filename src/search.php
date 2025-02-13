<?php
require 'test/db.php';

    $search = $_GET['search'];
    $sql = "SELECT * FROM items WHERE item_name LIKE '%$search%' OR item_type LIKE '%$search%'";
    $result = $conn ->query($sql);

    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
        
            $item_id = $row['itemid'];
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


// $searched_item = "banana";
// $result_count = 5;

$title = "Search Page";
$css_file = "search";
include("header.php");
?>

<main id="search-main">
    <h2>Search results for "<?php echo $search; ?>"</h2>
    <!-- <span><//?php echo $result_count ?> results</span> -->
    <div id="search-results">
        <div class="search-item">
            <div class="search-item-top">
                <div class="search-item-top-head">
                    <span class="discount-tag">Discount!</span>
                    <button>
                        <img src="img/heart.png" alt="">
                    </button>
                </div>
                <img src=<?php echo "$item_image" ?> alt="">
            </div>
            <div class="search-item-bot">
                <p rows="3"><?php echo $item_name?> <br><br></p>
                <div class="search-item-price">
                    <span><?php echo $item_price."€"?></span> <br>
                    <span><?php echo $item_price_per_kg."€/kg"?></span>
                </div>
                <button><a href=<?php echo "item.php?id=$item_id"; ?>>Add to cart!</a></button>
            </div>
        </div>

        <div class="search-item">
            <div class="search-item-top">
                <div class="search-item-top-head">
                    <span class="discount-tag">Discount!</span>
                    <button>
                        <img src="img/heart.png" alt="">
                    </button>
                </div>
                <img src="img/items/banana.png" alt="">
            </div>
            <div class="search-item-bot">
                <p rows="3">Fresh bananas from Zimbabwe <br><br></p>
                <div class="search-item-price">
                    <span>1,03€</span> <br>
                    <span>5,91€/kg</span>
                </div>
                <button><a href="item.php">Add to cart!</a></button>
            </div>
        </div>

        <div class="search-item">
            <div class="search-item-top">
                <div class="search-item-top-head">
                    <span class="discount-tag">Discount!</span>
                    <button>
                        <img src="img/heart.png" alt="">
                    </button>
                </div>
                <img src="img/items/banana.png" alt="">
            </div>
            <div class="search-item-bot">
                <p rows="3">Fresh bananas from Uganda <br><br></p>
                <div class="search-item-price">
                    <span>1,03€</span> <br>
                    <span>5,91€/kg</span>
                </div>
                <button><a href="item.php">Add to cart!</a></button>
            </div>
        </div>

        <div class="search-item">
            <div class="search-item-top">
                <div class="search-item-top-head">
                    <span class="discount-tag">Discount!</span>
                    <button>
                        <img src="img/heart.png" alt="">
                    </button>
                </div>
                <img src="img/items/banana.png" alt="">
            </div>
            <div class="search-item-bot">
                <p rows="3">Fresh bananas from Finland <br><br></p>
                <div class="search-item-price">
                    <span>1,03€</span> <br>
                    <span>5,91€/kg</span>
                </div>
                <button><a href="item.php">Add to cart!</a></button>
            </div>
        </div>

        <div class="search-item">
            <div class="search-item-top">
                <div class="search-item-top-head">
                    <span class="discount-tag">Discount!</span>
                    <button>
                        <img src="img/heart.png" alt="">
                    </button>
                </div>
                <img src="img/items/banana.png" alt="">
            </div>
            <div class="search-item-bot">
                <p rows="3">Fresh bananas from Turkey <br><br></p>
                <div class="search-item-price">
                    <span>1,03€</span> <br>
                    <span>5,91€/kg</span>
                </div>
                <button><a href="item.php">Add to cart!</a></button>
            </div>
        </div>


    </div>
</main>

<?php
include("footer.php"); 
?>