<?php
    session_start();
    require 'db.php';

    if (!isset($_SESSION['userid'])) {
        header("Location: entry.php");
        exit();
    }

    if (isset($_GET['cartid'])) {
        $cartid = $_GET['cartid'];
        $user_id = $_SESSION['userid'];

        $sql = "DELETE FROM cart WHERE cartid = ? AND userid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $cartid, $user_id);

        if ($stmt->execute()) {
            header("Location: cart.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Invalid cart item";
    }

    $conn->close();
?>
