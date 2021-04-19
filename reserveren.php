<div class="container reserveren">
    <div class="row">
        <div class="col-sm">
            <h2 class="">Welkom op de reserveer pagina</h2>
        </div>
        <div class="col-sm reserveerform">
            <form action="./reserveerscript.php" method="POST">
                <h3 class="">Wat wilt u doen?</h3>

                <div class="reserveercolomn">
                    <label for="">Uw keuze: </label>
                    <div class="reserveerinput">
                        <select name="keuze" class="form-select form-control" aria-label="Default select example">

                            <option value="Lunch">Lunch</option>
                            <option value="Diner">Diner</option>

                        </select>
                    </div>

                </div>

                <div class="reserveercolomn">
                    <label for="">Aantal Personen:</label>
                    <div class="reserveerinput">
                        <div class="form-group">
                            <input type="number" name="personen" class="form-control" id="exampleInputPassword1" placeholder="Personen">
                        </div>
                    </div>
                </div>

                <div class="reserveercolomn">
                    <label for="">Datum</label>
                    <div class="reserveerinput">
                        <div class="form-group">
                            <input type="date" name="datum" class="form-control" id="exampleInputPassword1" placeholder="Datu">
                        </div>
                    </div>
                </div>

                <div class="reserveercolomn">
                    <button type="submit" class="btn btn-primary submitregister">reserveer</button>
                </div>

            </form>
        </div>

    </div>
    <style>
        h3 {
            margin-bottom: 18px;
        }

        div.reserveren {
            margin-bottom: 25%;
        }

        div.reserveerform {
            background-color: #FAFAFA;
        }

        div.reserveercolomn {
            margin-bottom: 25px;
            margin-top: 25px;
            color: #727F8E;
        }

        div.reserveerinput {
            display: inline;
            float: right;
            width: 200px;
        }
    </style>