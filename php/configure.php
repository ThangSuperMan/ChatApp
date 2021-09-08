<?php
    $dbNameServer = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "ChatApp";

    $conn = mysqli_connect($dbNameServer, $dbUserName, $dbPassword, $dbName);

    // examine exist
    if($conn) {
        // setting Vietnamese
        mysqli_query($conn, "SET VALUES 'utf8'");
        echo "CONNECT SUCCESS";
    } else {
        echo "CONNECT FAIL!!!";
    }
?>