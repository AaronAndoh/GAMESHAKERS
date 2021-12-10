<?php 

$server = "localhost";
$user = "root";
$pass = "Godlovesme1019";
$database = "gameshakers";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>