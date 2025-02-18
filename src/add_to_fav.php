<?php
session_start();

if (!isset($_SESSION["userid"])) {
    echo "<script>alert('Please log in first to add items as favourites.')</script>";
    echo "<script>top.window.location = 'entry.php'</script>";
    exit();
}

require "db.php"; 

$itemid = $_GET["id"];
$userid = $_SESSION["userid"];

$sql = "SELECT * FROM fav_items WHERE userid = '$userid' AND itemid = '$itemid'";
$result = $conn->query($sql);

if ($result -> num_rows == 0) {
    $sql = "INSERT INTO fav_items (userid, itemid) VALUES ('$userid', '$itemid')";
    $conn -> query($sql);
}

$conn->close();
echo "<script>top.window.location = 'item.php?id={$_GET['id']}'</script>";
exit();
?>