<?php
if (isset($_POST["personen"]) || ($_POST["datum"])) {
    $keuze = $_POST["keuze"];
}
else {
    print_r("error");
}

 ?>