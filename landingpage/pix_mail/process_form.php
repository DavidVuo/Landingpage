<?php
    $dbServername = "**";
    $dbUsername = "**";
    $dbPassword = "**";
    $dbName = "**";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function insertQuery($conn) {
        // Protection against SQL-injection
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users (name, email)
                    VALUES ('$name', '$email');";
        mysqli_query($conn, $sql);
    }
    insertQuery($conn);

    header("Location: ../index.html?signup=success");