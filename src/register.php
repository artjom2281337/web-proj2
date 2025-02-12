<?php
    
    function getId($conn, $email): int {
        
        // Get newly inserted user
        $sql = "SELECT userid FROM users WHERE email = '$email'";
        $result = $conn -> query($sql);

        // Return their id
        if ($result -> num_rows > 0) {
            while($row = $result -> fetch_assoc()) {
                return $row["userid"];
            }
        }

        return -1;

    }

    // Database
    require "test/db.php";

    // Data from the form
    $corporate = +($_POST["corporate"] === "Yes");
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    // Select user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn -> query($sql);

    // Add to database
    if ($result -> num_rows > 0) { // Email is already used
        echo "<script>alert('User with this email already exists.')</script>";
        include "register.html";
    } else { // Email can be used

        // Insert
        $sql="INSERT INTO users (fname, lname, email, password, iscorp)
        VALUES('$firstName', '$lastName', '$email', '$password', $corporate)";

        if ($conn -> query($sql) === true) { // Success
            $id = getId($conn, $email);
            echo "<script>top.window.location = 'index.php?id=$id'</script>";
        } else { // Something went wrong
            echo "<script>alert('Something went wrong.')</script>";
        include "register.html";
        };
    }

?>

