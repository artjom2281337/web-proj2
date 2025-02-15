<?php
session_start();
require 'test/db.php';

$user_id = $_SESSION['userid'];

$title = "Cart";
$css_file = "cart";

include("header.php");

$sql = "SELECT cart.cartid, items.item_name, items.img, cart.quantity, items.price 
            FROM cart 
            JOIN items ON cart.itemid = items.itemid
            WHERE cart.userid = '$user_id'";

$result = $conn->query($sql);

$cart_items = [];
$total_price = 0;
$total_items = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cart_items[] = $row;
        $total_price += $row['price'] * $row['quantity'];
        $total_items += $row['quantity'];
    }
}

$conn->close();
?>

<main id="cart-display">
    <span id="cart-title">My cart</span> <span id="cart-count"><?php echo $total_items; ?>
        <?php echo ($total_items == 1) ? 'item' : 'items'; ?></span>
    <div id="cart-content">
        <div id="cart-left">
            <?php foreach ($cart_items as $item): ?>
                <section class="cart-item">
                    <div class="cart-item-img">
                        <img src="<?php echo $item['img']; ?>" alt="">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-content-top">
                            <span class="cart-item-name"><?php echo $item['item_name']; ?></span>
                            <span
                                class="cart-item-price"><?php echo number_format($item['price'] * $item['quantity'], 2, ',', '.') . "€"; ?></span>
                            <!-- formats the number properly instead of plain integer -->
                        </div>
                        <div class="cart-item-content-bot">
                            <div class="cart-delete">
                                <a href="remove_from_cart.php?cartid=<?php echo $item['cartid']; ?>">
                                    <img src="img/trash.png" alt="">
                                    <span>Remove this item</span>
                                </a>
                            </div>
                            <div class="cart-addition">
                                <div class="cart-addition">
                                    <form action="update_cart.php" method="post" style="display:inline;">
                                        <input type="hidden" name="cartid" value="<?php echo $item['cartid']; ?>">
                                        <input type="hidden" name="action" value="decrease">
                                        <button type="submit">-</button>
                                    </form>
                                    <span><?php echo $item['quantity']; ?> pcs</span>
                                    <form action="update_cart.php" method="post" style="display:inline;">
                                        <input type="hidden" name="cartid" value="<?php echo $item['cartid']; ?>">
                                        <input type="hidden" name="action" value="increase">
                                        <button type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
        <aside id="cart-total">
            <div id="cart-summary">
                <div id="cart-top">
                    <span class="cbold">Cart summary</span>
                    <span class="cgray"><?php echo $total_items; ?>
                        <?php echo ($total_items == 1) ? 'item' : 'items'; ?></span>
                </div>
                <div id="cart-mid">
                    <span class="cthin">Total amount</span>
                    <span class="cthin"><?php echo number_format($total_price, 2, ',', '.') . "€"; ?></span>
                </div>
                <div id="cart-bot">
                    <span class="cbold">Amount to be paid</span>
                    <span class="cbold"><?php echo number_format($total_price, 2, ',', '.') . "€"; ?></span>
                </div>
            </div>
            <div id="cart-delivery">
                <div class="cart-delivery-option">
                    <input type="radio" id="cart-bring" name="delivery" value="a">
                    <div class="cart-delivery-desc">
                        <label for="html">Bring it to my address</label>
                        <p>We will bring the items to this address: <br>
                            Pipsapossunkatu 13 a 37, 12345, Hämeenlinna </p>
                    </div>
                </div>
                <div class="cart-delivery-option">
                    <input type="radio" id="cart-take" name="delivery" value="b">
                    <div class="cart-delivery-desc">
                        <label for="html">Take from the closest MMarket</label>
                        <p>The current closest MMarket to you location is: <br>
                            Pipsapossunkatu 4 a 20, 12345, Hämeenlinna <br>
                            <u>Note: This has nothing to do with stealing data.</u>
                        </p>
                    </div>
                </div>
            </div>
            <div id="cart-proceed">
                <button>Proceed to payment</button>
            </div>
        </aside>
    </div>
</main>

<?php
include("footer.php");
?>