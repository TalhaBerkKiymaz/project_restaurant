<?php

include("./connect_db.php");

$sql = "SELECT  p.id, p.naam, p.omschrijving, p.prijs, c.id as catid, c.naam as catname, c.omschrijving as catdesc 
        FROM product as p INNER JOIN catalogus as c 
        ON p.catalogus=c.id 
        ORDER BY catid ASC

 ";
// echo $sql;

$result = mysqli_query($conn, $sql);
// var_dump($result);

if (mysqli_num_rows($result) > 0) {
    $show = "<div class='menukaart col-3 offset-1'>";
    while ($row = mysqli_fetch_array($result)) {
        $show .= "
        
        <div class='menu-cat' id='cat{$row['catid']}'>
        <ul class='menu-cat-group'>
            <li class='menu-cat-li'>
                <form action='./index.php?content=add&id={$row['id']}' class='menu-cat-item' method='post'>
                    <b class='item-name'> {$row['naam']} </b> <br>
                    <span class='item-description'>{$row['omschrijving']}</span>
                </form>
            </li>
        </ul>
    </div>
       ";
    }
}


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "  SELECT  p.id, p.naam, p.omschrijving, p.prijs, c.id as catid, c.naam as catname, c.omschrijving as catdesc 
    FROM product as p INNER JOIN catalogus as c 
    ON p.catalogus=c.id
    WHERE c.id = $id 
    ORDER BY catid ASC";
    // echo $sql;
    // exit();
    $result = mysqli_query($conn, $sql);
    // var_dump($result1);

    if (mysqli_num_rows($result) > 0) {
        $show = "<div class='menukaart col-3 offset-1'>";
        while ($record = mysqli_fetch_array($result)) {
            $catname = $record['catname'];
            $catid = $record['catid'];
            $catdesc = $record['catdesc'];
            $pnaam = $record['naam'];
            $pdesc = $record['omschrijving'];
            $pprijs = $record['prijs'];
?>
<?php

$show.="
            <div class='menu-cat' id='{$catid}'>
                <ul class='menu-cat-group'>
                    <li class='menu-cat-li'>
                        <form action='./index.php?content=add&id={$catid}' class='menu-cat-item' method='post'>
                            <b class='item-name'> {$pnaam} </b> <br>
                            <span class='item-description'> {$pdesc} </span>
                        </form>
                    </li>
                </ul>
            </div>
";
            ?>
            <?php



        }
    }
}

?>






<div class="banner-menu container">
    <img src="./img/banner1.jpg" alt="Menu Banner">
</div>

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
                <a href="?content=bestellen&id=3">Popular lunches
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=1">Sushi
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=2">Sashimi
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=3">Eggs & Sandwiches
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=4">Marina Plateaus
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=5">Kids
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=6"> Salads
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=7">White Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=8">Red Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=9">Rosê Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&id=10">Sparkling Wines
                    <hr>
                </a>
            </li>
        </ul>
    </div>


<?php echo $show; ?>
    <!-- php ile databaseden cekerken buraya listeyi echola. -->

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