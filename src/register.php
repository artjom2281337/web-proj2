<?php
    
    function getId($conn, $email): int {
        
        $sql = "SELECT userid FROM users WHERE email = '$email'";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0) {
            while($row = $result -> fetch_assoc()) {
                return $row["userid"];
            }
        }

        return -1;

    }

    require "db.php";

    $corporate = +($_POST["corporate"] === "Yes");
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) { 
        echo "<script>alert('User with this email already exists.')</script>";
        include "register.html";
    } else { 

        session_start();

        $sql="INSERT INTO users (fname, lname, email, password, iscorp)
        VALUES('$firstName', '$lastName', '$email', '$password', $corporate)";

        if ($conn -> query($sql) === true) { 
            $id = getId($conn, $email);
            $_SESSION["userid"] = $id;
            $_SESSION["email"] = $email;
            echo "<script>top.window.location = 'index.php?id=$id'</script>";
        } else { 
            echo "<script>alert('Something went wrong.')</script>";
        include "register.html";
        };
    }

?>

