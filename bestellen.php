<div class="banner-menu">
    <img src="./img/banner1.jpg" width="1900" height="380" alt="Menu Banner">
</div>
<div class="container-fluid">
    <div class="main-menu row align-items-start">
        <div class="col-12">
            <h3 class="main-menu-h3">Menu
                <hr>
            </h3>
        </div>
        <div class="category col-3 ">

            <ul class="menu-group">
                <h5>Category</h5>
                <li class="menu-list">
                    <a href="#cat1">Popular lunches
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Sushi
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Sashimi
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Eggs & Sandwiches
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href=""> Salads
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Kids
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">White Wine
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Red Wine
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Rosê Wine
                        <hr>
                    </a>
                </li>
                <li class="menu-list">
                    <a href="">Sparkling Wines
                        <hr>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menukaart col-3 offset-1">
            <!-- php ile databaseden cekerken buraya listeyi echola. -->
            <div class="menu-cat" id="cat1">
                <h3 id="category"> Sushi </h3>
                <hr>
                <ul class="menu-cat-group">
                    <li class="menu-cat-li">
                        <a class="menu-cat-item" href="">
                            <b class="item-name"> Salmon flame Roll</b> <br>
                            <span class="item-description">with flame torched salmon & wasabi sesame</span>
                        </a>
                    </li>
                    <li class="menu-cat-li">
                        <a class="menu-cat-item" href="">
                            <b class="item-name"> Crispy asparagus roll</b> <br>
                        </a>
                    </li>
                    <li class="menu-cat-li">
                        <a class="menu-cat-item" href="">
                            <b class="item-name"> Rainbow Roll</b> <br>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-cat" id="cat2">
                <h3 id="category"> Eggs & Sandwiches </h3>
                <hr>
                <ul class="menu-cat-group">
                    <li class="menu-cat-li">
                        <a class="menu-cat-item" href="">
                            <b class="item-name"> Avocado Toast</b> <br>
                            <span class="item-description">/w crispy bacon , poached
                                eggs , fresh herbs & mayonnaise</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-cat" id="cat1">
                <h3 id="category"> Marina Plateau </h3>
                <hr>
                <ul class="menu-cat-group">
                    <li class="menu-cat-li">
                        <a class="menu-cat-item" href="">
                            <b class="item-name"> Plateau Royale</b> <br>
                            <span class="item-description">16pcs of sushi & 16pcs of sashimi , selection of 8 oyster,
                                Dutch shrimp & Nordic pink shrimps , 1/4 cooked
                                lobster & fresh red crab salad
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="basket col-3 offset-1">
            <div class="basket-title">
                <h2>Jouw Bestelling</h2>
            </div>
            <div class="basket-content">
                <div id="products">
                    <div class="cart-row">
                        <div class="cart-meal-edit-buttons">
                            <div class="glyphicon glyphicon-plus-sign"></div>
                            <div class="glyphicon glyphicon-minus-sign"></div>
                        </div>
                        <span class="cart-meal-amount">1x </span>
                        <span class="cart-meal-name">Salmon Flame Roll</span>
                        <span class="cart-sum-price">€ 8,00</span>

                    </div>
                </div>
                <hr>
                <div id="sum">
                    <!-- subtotaal -->
                    <div class="cart-row">
                        <span class="cart-sum-name grey">Subtotaal</span>
                        <span class="cart-sum-price">€ 8,00</span>
                    </div>
                    <!-- bezorgkosten -->
                    <div class="cart-row">
                        <span class="cart-sum-name grey">Bezorgkosten:</span>
                        <span class="cart-sum-price">€ 2,00</span>
                    </div>
                    <!-- Totaal -->
                    <div class="cart-row">
                        <span class="cart-sum-name">Totaal</span>
                        <span class="cart-sum-price">€ 10,00</span>
                    </div>
                    <div class="cart-row-extra"><br>
                        <span class="cart-sum-name"><small>Gratis bezorging vanaf € 15,00</small></span>

                    </div>
                </div>
            </div>
            <hr>
            <div class="basket-afrekenen">
                <a class="btn btn-dark" href="#" role="button">ORDER</a>
            </div>
        </div>
    </div>
</div>