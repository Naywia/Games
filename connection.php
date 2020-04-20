<?php

$servername = "wettendorff.com.mysql:3306";
$username = "wettendorff_com";
$dbPassword = "umGchVjr";
$database = "wettendorff_com";

$conn = new mysqli($servername, $username, $dbPassword, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

