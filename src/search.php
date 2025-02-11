<?php
$searched_item = "banana";
$result_count = 5;

$title = "Search Page";
$css_file = "search";
include("header.php");
?>

<main id="search-main">
    <h2>Search results for "<?php echo $searched_item; ?>"</h2>
    <span><?php echo $result_count ?> results</span>
    <div id="search-results">
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
                <p rows="3">Fresh bananas from Antarctica <br><br></p>
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