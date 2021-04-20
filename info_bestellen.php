<?php

include("./connect_db.php");

$product = $_POST["hidden_product"];
$quantity = $_POST["hidden_quantity"];
$total = $_POST["hidden_price"];


if (empty($product) || empty($quantity) || empty($total)) {
    echo '<script>alert("No Item has been added to Basket")</script>';
    echo '<script>window.location="?content=bestellen"</script>';
} else {
    $sql = "SELECT `id`, `naam`, `prijs` FROM product 
            WHERE `naam` = '$product'";
    // echo $sql; exit();

    $result = mysqli_query($conn, $sql);

    if (!mysqli_num_rows($result)) {
        echo '<script>alert("The Item you chose does not match with our products")</script>';
        echo '<script>window.location="?content=bestellen"</script>';
    } else {
        $show = "<div class='ordered-product col-3'>";
        while ($row = mysqli_fetch_array($result)) {
            $pid = $row['id'];
            $pprice = number_format($row['prijs'], 2);
            $show .= "
            <tr>
            <input type='hidden' value='{$pid}'>
            <input type='hidden' value='{$total}'>
            <input type='hidden' value='{$quantity}'>
            <td>{$row['naam']}</td>
            <td>€ {$pprice}</td>
            <td>{$quantity} pieces</td>
            <td>€ {$total}</td>
            </tr>
                    
            ";
        }
    }
}
?>

<div class="container">
    <form action="./index.php?content=bestelform" method="post">
        <div class="hero-content">
            <h5 style="text-align: center; padding-top: 10px; color: #000000; font-style:italic; font-size: 50px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                We are almost finished!</h5>
            <h5 style="text-align: center; padding-top: 10px; color: #000000; font-style:italic; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                George Hollywood</h5>

            <div class="card-body">
                <h5 style="padding-top: 10px; color: #000000; font-style:italic; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                    How can I reach you?</h5>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputEmail">Name</label>
                        <input name="naam" type="naam" class="form-control" id="inputNaam" aria-describedby="naamHelp" autofocus>
                        <small id="naamHelp" class="form-text ">Enter your name here.</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputPassword">Surname</label>
                        <input name="achternaam" type="achternaam" class="form-control" id="inputAchternaam" aria-describedby="AchternaamHelp">
                        <small id="naamHelp" class="form-text ">Enter your surname here.</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputEmail">E-mailadres</label>
                        <input name="emailadres" type="emailadres" class="form-control" id="inputEmailadres" aria-describedby="emailadresHelp" autofocus>
                        <small id="naamHelp" class="form-text ">Enter your e-mailadres here.</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputPassword">Telephone Number</label>
                        <input name="telefoonnummer" type="telefoonnummer" class="form-control" id="inputTelefoonnummer" aria-describedby="TelefoonnummerHelp">
                        <small id="naamHelp" class="form-text ">Enter your telephone number here.</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-body">
                <h5 style="padding-top: 10px; color: #000000; font-style:italic; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                    Where do you want your order to be delivered?</h5>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputEmail">Postcode</label>
                        <input name="postcode" type="postcode" class="form-control" id="inputPostcode" aria-describedby="postcodeHelp" autofocus>
                        <small id="postcodeHelp" class="form-text ">Enter your postcode here.</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bestel-form">
                        <label for="inputEmail">House number</label>
                        <input name="naam" type="naam" class="form-control" id="inputNaam" aria-describedby="naamHelp" autofocus>
                        <small id="naamHelp" class="form-text ">Enter your house number here.</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="card-body">
                        <h5 style="padding-top: 10px; color: #000000; font-style:italic; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                            How would you like to pay?</h5>
                    </div>

                    <div class="bestel-form">
                        <div class="dropdown">
                        <select name="" id="">
                        <option value="">Contant</option>
                        <option value="">IDEAL</option>
                        <option value="">Mastercard</option>
                        <option value="">AmericanExpress</option>
                        
                        </select>
                            <button class="dropbtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Payment methode
                            </button>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="basket-title">
                        <h3>Order history</h3>
                    </div>
                    <table class="table table-hover" id="table-assigment">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price per piece</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $show; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="col-4 offset-9 bestel-but">
            <button style="width: 250px; height: 80px; font-size: 24px;" type="submit" name="order_finiliaze" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Order</button>
            </div>

        </div>
    </form>
</div>