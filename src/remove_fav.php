<?php
session_start();

if (!isset($_SESSION["userid"])) {
    echo "<script>alert('Please log in to remove items from favorites.')</script>";
    header("Location: entry.php");
    exit();
}

require "test/db.php"; 

$userid = $_SESSION["userid"];
$itemid = $_GET["id"];

$sql = "DELETE FROM fav_items WHERE userid = '$userid' AND itemid = '$itemid'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Item removed from favorites.')</script>";
}

$conn->close();
header("Location: item.php?id=$itemid");
// Warning: Cannot modify header information - headers already sent (output started at script:line)
// TODO: Solve the error. Apparently you are not ssupposed to output anything before calling header function but after commenting the code out, the function on item page wont work.
exit();
?>
