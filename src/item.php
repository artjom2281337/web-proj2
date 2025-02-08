<?php
    $title = "Item Page";
    $css_file = "item";
    include("header.php");
?>

    <main id="item-display">
        <span id="item-category"><a href="#">Food</a> > <a href="#">Fruits</a> > <a href="">Exported Fruits</a> > <a href="">Banana</a></span>
        <article id="display-div">
            <section id="item-top">
                <div id="item-image">
                    <img src="img/items/banana.png" alt="Banana">
                </div>
                <div id="item-name">
                    <h1>Chiquita banana</h1>
                    <span id="item-provider">Mother Nature co.</span>
                </div>
                <div id="item-price">
                    <p id="price-of-one">1,03€</p>
                    <p id="price-of-kilo">5,91€/kg</p>
                </div>
                <div id="item-buttons">
                    <button id="item-add-to-cart"><a href="cart.html">Add to cart</a></button>
                    <button id="item-add-to-fav"><img src="img/heart.png"></button>
                </div>
            </section>

            <section id="item-info">
                <span id="info-title">Product Information</span>
                <section id="item-info-div">
                    <div class="info-div">
                        <img src="img/company.png" alt="">
                        <div>
                            <span>Country</span> <br>
                            <span>Guatemala</span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/origin.png" alt="">
                        <div>
                            <span>Company</span> <br>
                            <span>Mother Nature co.</span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/contains.png" alt="">
                        <div>
                            <span>Ingredients</span> <br>
                            <span>Deadly amount of potassium</span>
                        </div>
                    </div>
                    <div class="info-div">
                        <img src="img/allergens.png" alt="">
                        <div>
                            <span>Allergens</span> <br>
                            <span>None</span>
                        </div>
                    </div>
                </section>
            </section>
        </article>
    </main>

<?php
    include("footer.php");
?>