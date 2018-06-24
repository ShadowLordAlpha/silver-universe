<?php
$servername = $_SERVER['DATABASE_URL'];
$username = $_SERVER['DATABASE_USER'];
$password = $_SERVER['DATABASE_PASSWORD'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, "silver_universe", 3306);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
