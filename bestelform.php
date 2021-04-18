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
            <div class="card-body">
                <h5 style="padding-top: 10px; color: #000000; font-style:italic; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; ;">
                    How would you like to pay?</h5>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="bestel-form">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Payment methode
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Contant</a></li>
                                <li><a class="dropdown-item" href="#">iDeal</a></li>
                                <li><a class="dropdown-item" href="#">Visa</a></li>
                                <li><a class="dropdown-item" href="#">Mastercard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>