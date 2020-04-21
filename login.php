<?php

// Start a session
session_start();

include_once 'connection.php';

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

if ($email != "" && $password != "") {

    $sql_query = "select count(*) as cntUser from gdb_login where e_mail='" . $email . "' and password='" . $password . "'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];
    echo "Hello!";
    if ($count > 0) {
        $_SESSION['email'] = $email;
        echo 1;
    } else {
        echo 0;
    }
    header("Location: index.php");
}

$_SESSION['email'] = "HvadLaverDuMaya?";
print_r($_SESSION);
echo "Hello!";
