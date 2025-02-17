<?php
session_start();

if (!isset($_SESSION["userid"])) {
    echo "<script>alert('Log in first.')</script>";
    echo "<script>top.window.location = 'entry.php'</script>";
    exit();
}

require "test/db.php"; 

$userid = $_SESSION["userid"];
$itemid = $_GET["id"];

$sql = "DELETE FROM fav_items WHERE userid = '$userid' AND itemid = '$itemid'";

if ($conn->query($sql) === FALSE) {
    echo "<script>alert('Something went wrong')</script>";
}

$conn->close();
echo "<script>top.window.location = 'item.php?id={$_GET['id']}'</script>";
exit();
?>
