<?php
require 'test/db.php';
session_start();

if (!isset($_SESSION['userid'])) {

    header("Location: entry.php");
    exit();
}

$itemid = $_GET['id'];
$userid = $_SESSION['userid'];

$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

$sql_check = "SELECT * FROM cart WHERE userid = ? AND itemid = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("ii", $userid, $itemid);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    $sql_update = "UPDATE cart SET quantity = quantity + ? WHERE userid = ? AND itemid = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("iii", $quantity, $userid, $itemid);
    $stmt_update->execute();
} else {
    $sql_insert = "INSERT INTO cart (userid, itemid, quantity) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("iii", $userid, $itemid, $quantity);
    $stmt_insert->execute();
}

$conn->close();

header("Location: cart.php");
exit();
?>
