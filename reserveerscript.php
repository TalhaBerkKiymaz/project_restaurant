<?php
if (!empty($_POST['personen']) && (!empty($_POST['datum'])) {
    $keuze = $_POST["personen"];
    print $keuze;
}
else {
    print('error');
}

 ?>