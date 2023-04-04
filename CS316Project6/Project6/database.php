<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs316";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
