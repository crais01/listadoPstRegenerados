<?php
$dbname = "listadopst";
$dbuser = "root";
$dbpassword = "caschile";
$dbhost = "localhost";

$cnx = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
}

?>