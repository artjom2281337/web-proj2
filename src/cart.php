<?php 
    $title = "Cart";
    $css_file = "cart";
    include("header.php");
?>

    <main id="cart-display">
        <span id="cart-title">My cart</span> <span id="cart-count">4 items</span>
        <div id="cart-content">
            <div id="cart-left">
                <section class="cart-item">
                    <div class="cart-item-img">
                        <img src="img/items/banana.png" alt="">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-content-top">
                            <span class="cart-item-name">Chiquita banana</span>
                            <span class="cart-item-price">2,06€</span>
                        </div>
                        <div class="cart-item-content-bot">
                            <div class="cart-delete">
                                <a href="#">
                                    <img src="img/trash.png" alt="">
                                    <span href="#">Remove this item</span>
                                </a>
                            </div>
                            <div class="cart-addition">
                                <button>-</button>
                                <span>2 pcs</span>
                                <button>+</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cart-item">
                    <div class="cart-item-img">
                        <img src="img/items/rtx4090.png" alt="">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-content-top">
                            <span class="cart-item-name">GeForce RTX 4090 24GB XLR8 VERTO EPIC-X RGB Triple Fan</span>
                            <span class="cart-item-price">679,99€</span>
                        </div>
                        <div class="cart-item-content-bot">
                            <div class="cart-delete">
                                <a href="#">
                                    <img src="img/trash.png" alt="">
                                    <span href="#">Remove this item</span>
                                </a>
                            </div>
                            <div class="cart-addition">
                                <button>-</button>
                                <span>1 pcs</span>
                                <button>+</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cart-item">
                    <div class="cart-item-img">
                        <img src="img/items/banana.png" alt="">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-content-top">
                            <span class="cart-item-name">Chiquita banana</span>
                            <span class="cart-item-price">2,06€</span>
                        </div>
                        <div class="cart-item-content-bot">
                            <div class="cart-delete">
                                <a href="#">
                                    <img src="img/trash.png" alt="">
                                    <span href="#">Remove this item</span>
                                </a>
                            </div>
                            <div class="cart-addition">
                                <button>-</button>
                                <span>2 pcs</span>
                                <button>+</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cart-item">
                    <div class="cart-item-img">
                        <img src="img/items/rtx4090.png" alt="">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-content-top">
                            <span class="cart-item-name">GeForce RTX 4090 24GB XLR8 VERTO EPIC-X RGB Triple Fan</span>
                            <span class="cart-item-price">679,99€</span>
                        </div>
                        <div class="cart-item-content-bot">
                            <div class="cart-delete">
                                <a href="#">
                                    <img src="img/trash.png" alt="">
                                    <span href="#">Remove this item</span>
                                </a>
                            </div>
                            <div class="cart-addition">
                                <button>-</button>
                                <span>1 pcs</span>
                                <button>+</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <aside id="cart-total">
                <div id="cart-summary">
                    <div id="cart-top">
                        <span class="cbold">Cart summary</span>
                        <span class="cgray">6 items</span>
                    </div>
                    <div id="cart-mid">
                        <span class="cthin">Total amount</span>
                        <span class="cthin">1364,10€</span>
                    </div>
                    <div id="cart-bot">
                        <span class="cbold">Amount to be paid</span>
                        <span class="cbold">1364,10€</span>
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
                                <u>Note: This has nothing to do with stealing data.</u></p>
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