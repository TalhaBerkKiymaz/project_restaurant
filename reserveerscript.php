<?php
include('./connect_db.php');
if (!empty($_POST['personen']) && (!empty($_POST['datum']))) {
 $email = $_POST['email'];
 $personen = $_POST['personen'];
 $datum = $_POST['datum'];
    $sql = "INSERT INTO `reservering` (`reservering_email`, `personen`, `datum`)
    VALUES ('$email', '$personen', '$datum')";

    mysqli_query($conn, $sql);
    print("reservering succesvol");
}


else {
    print_r("error");
}

 ?>