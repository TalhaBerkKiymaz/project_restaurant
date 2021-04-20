<?php
if (!empty($_POST['personen']) && (!empty($_POST['datum']))) {
    $keuze = $_POST['personen'];
    $datum = $_POST['datum'];
    $keuze = $_POST['keuze'];
        print $keuze;
        print $datum;
        print $keuze;
}
else {
    print('error');
}

 ?>