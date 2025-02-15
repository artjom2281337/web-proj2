<?php
    session_start();

    // Database
    require "test/db.php";

    // Data from the form
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    // Select user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn -> query($sql);

    // Check if user exists
    if ($result -> num_rows > 0) {
        $row = $result -> fetch_assoc();
            if ($row["password"] == $password) { // Correct password -> go to main page as locked user
                $_SESSION["userid"] = $row["userid"];
                $_SESSION["email"] = $email;
                echo "<script>top.window.location = 'index.php?id={$_SESSION['userid']}'</script>";
            } else { // Incorrect password
                echo "<script>alert('Email or password is incorrect')</script>";
                include "login.html";
            }
        
    } else { // User doesn't exist
        echo "<script>alert('$email doesn\'t exist.')</script>";
        include "login.html";
    }
?>