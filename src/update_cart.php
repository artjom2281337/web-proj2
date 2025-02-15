<?php
session_start();
require 'test/db.php';

if (!isset($_SESSION['userid'])) {
    header("Location: entry.php");
    exit();
}

$user_id = $_SESSION['userid'];
$cartid = $_POST['cartid'];
$action = $_POST['action'];

$sql = "SELECT quantity FROM cart WHERE cartid = ? AND userid = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $cartid, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity = $row['quantity'];

    if ($action == 'increase') {
        $quantity++;
    } elseif ($action == 'decrease' && $quantity > 1) {
        $quantity--;
    }

    $sql = "UPDATE cart SET quantity = ? WHERE cartid = ? AND userid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $quantity, $cartid, $user_id);
    $stmt->execute();
}

$stmt->close();
$conn->close();

header("Location: cart.php");
exit();
?>