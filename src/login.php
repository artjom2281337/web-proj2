<?php
    session_start();

    require "db.php";

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        $row = $result -> fetch_assoc();
            if ($row["password"] == $password) { 
                $_SESSION["userid"] = $row["userid"];
                $_SESSION["email"] = $email;
                echo "<script>top.window.location = 'index.php?id={$_SESSION['userid']}'</script>";
            } else { 
                echo "<script>alert('Email or password is incorrect')</script>";
                include "login.html";
            }
        
    } else { 
        echo "<script>alert('$email doesn\'t exist.')</script>";
        include "login.html";
    }
?>