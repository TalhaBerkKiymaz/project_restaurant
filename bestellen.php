<?php

include("./connect_db.php");



// Gives all the product //
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
        <div class='menu-cat' id='{$row['catid']}'>
        <ul class='menu-cat-group'>
            <li class='menu-cat-li'>
                <form action='./index.php?content=bestellen&action=add&id={$row['id']}' class='menu-cat-item' method='post'>
                <div class='item-price'>
                    <span>€ {$row['prijs']} |</span>
                    <span> pcs <input type='number' id='quantity' name='quantity' required min='1' max='5'> </span>
                </div>    
                <b class='item-name'>{$row['naam']} </b> <br>
                <span class='item-description'> {$row['omschrijving']} </span> <br>
                <input type='hidden' name='hidden_name' value='{$row['naam']}'>
                <input type='hidden' name='hidden_price' value='{$row['prijs']}'>
                <button class='add-to-basket' type='submit' name='add_to_cart' id='submitButton'>
                Voeg toe
                </button>
                <br><hr>
                </form>
            </li>
        </ul>
    </div>
       ";
    }
}

// Category filtering //
if (isset($_GET["catid"])) {
    $id = $_GET["catid"];
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
            $pid = $record['id'];
            $pnaam = $record['naam'];
            $pdesc = $record['omschrijving'];
            $pprice = $record['prijs'];
?>
            <?php

            $show .= "
            <div class='menu-cat' id='{$catid}'>
                <ul class='menu-cat-group'>
                    <li class='menu-cat-li'>
                        <form action='./index.php?content=bestellen&action=add&id={$pid}' class='menu-cat-item' method='post'>
                        <div class='item-price'>
                            <span>€ {$pprice} |</span>
                            <span> pcs <input type='number' id='quantity' name='quantity' required min='1' max='5'> </span>
                        </div>    
                        <b class='item-name'> {$pnaam} </b> <br>
                        <span class='item-description'> {$pdesc} </span> <br>
                        <input type='hidden' name='hidden_name' value='{$pnaam}'>
                        <input type='hidden' name='hidden_price' value='{$pprice}'>
                        <button class='add-to-basket' type='submit' name='add_to_cart' id='submitButton'>
                        Voeg toe
                        </button>
                        <br><hr>
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

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="?content=bestellen"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
// delete items
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="?content=bestellen"</script>';
            }
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
        <a style="float: right; font-size: 1em;" href="http://www.georgehollywood.com/index.php?content=notification">Ober</a>
            <hr>
        </h3>
    </div>
    <div class="category col-3 ">

        <ul class="menu-group">
        
            <h5>Category</h5>
            <li class="menu-list">
                <a href="?content=bestellen">All Lunches
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=1">Sushi
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=2">Sashimi
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=3">Eggs & Sandwiches
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=4">Marina Plateaus
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=5">Kids
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=6"> Salads
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=7">White Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=8">Red Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=9">Rosê Wine
                    <hr>
                </a>
            </li>
            <li class="menu-list">
                <a href="?content=bestellen&catid=10">Sparkling Wines
                    <hr>
                </a>
            </li>
        </ul>
    </div>


    <?php echo $show; ?>
    <!-- php ile databaseden cekerken buraya listeyi echola. -->

</div>

<div class="basket col-3 offset-1 ">
    <div class="basket-title">
        <h1>Jouw Bestelling</h1>
    </div>
    <hr style="border: 1px solid gray;">
        <?php
        if (!empty($_SESSION["shopping_cart"])) {
            $total = 0;
            $full_name = "";
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                <div class="cart-row">
                    <div class="cart-meal-edit-buttons">
                        <a href="?content=bestellen&action=delete&id=<?php echo $values["item_id"]; ?>">
                            <div class="glyphicon glyphicon-minus-sign"></div>
                        </a>
                    </div>
                    <span class="cart-meal-amount"><?php echo $values["item_quantity"] ?> </span>
                    <span class="cart-meal-name"><?php echo $values["item_name"] ?></span>
                    <span class="cart-sum-price">€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> </span>
                    <br>
                    <span class="cart-meal-amount">pcs - € <?php echo $values["item_price"] ?></span>

                </div>
                <hr style="border: 1px solid black;">
            <?php
                $total = $total + ($values["item_quantity"] * $values["item_price"] + 2);
            }
            
            ?>
            <form action="./index.php?content=info_bestellen" method="post">
            <div id="sum">
                <!-- bezorgkosten -->
                <div class="cart-row">
                    <span class="cart-sum-name grey">Bezorgkosten:</span>
                    <span class="cart-sum-price">€ 2,00</span>
                </div>
                <!-- Totaal -->
                <div class="cart-row">
                    <span class="cart-sum-name">Totaal</span>
                    <span class="cart-sum-price">€ <?php echo number_format($total, 2); ?></span>
                <input type="hidden" name="hidden_product" value="<?php echo $values["item_name"] ?>">
                <input type="hidden" name="hidden_quantity" value="<?php echo $values["item_quantity"] ?>">
                <input type="hidden" name="hidden_price" value="<?php echo number_format($total, 2); ?>">
                </div>
                <div class="basket-afrekenen">
                    <button class="btn btn-dark" type="submit" role="button">ORDER</button>
                </div>
            </div>
            </form>
</div>

<?php
        }
?>