<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASENAME", "project_restaurant");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

define('DBINFO', 'mysql:host=localhost;dbname=project_restaurant');
define('DBUSER', 'root');
define('DBPASS', '');

function fetchAll($query)
{
    $con = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $con->query($query);
    return $stmt->fetchAll();
}
function performQuery($query)
{
    $con = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $con->prepare($query);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
