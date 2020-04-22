<?php

session_start();

if (!isset($_SESSION['previous_location'])) {
    $_SESSION['previous_location'] = 'index.php';
}

include_once 'connection.php';

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

if ($email != "" && $password != "") {

    $sql_query = "select count(*) as cntUser from gdb_login where email='" . $email . "' and password='" . $password . "'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];
    if ($count > 0) {
        $_SESSION['email'] = $email;
        if ($_SESSION['email'] == "maya@wettendorff.com") {
            $_SESSION['username'] = "Maya";
        } else if ($_SESSION['email'] == "rasmus.norby@gmail.com") {
            $_SESSION['username'] = "Admin";
        }
    }
}

header('Location: ../' . $_SESSION['previous_location']);
