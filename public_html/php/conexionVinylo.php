<?php

$servername="localhost";
$database="id19706168_tiendavinylo";
$username="id19706168_brunobruno";
$password = "D4t4b4s3+br1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
