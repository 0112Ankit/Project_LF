<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landtax_portal"; // Make sure this database exists
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>