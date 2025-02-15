<?php
session_start();

if (!isset($_SESSION["userid"])) {
    echo "<script>alert('Log in first.')</script>";
    header("Location: entry.php");
    exit();
}

require "test/db.php"; 

$itemid = $_GET["id"];
$userid = $_SESSION["userid"];

$sql = "SELECT * FROM fav_items WHERE userid = '$userid' AND itemid = '$itemid'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    $sql = "INSERT INTO fav_items (userid, itemid) VALUES ('$userid', '$itemid')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Item added to favorites.')</script>";
    }
}

$conn->close();
header("Location: item.php?id=$itemid");
// Warning: Cannot modify header information - headers already sent (output started at script:line)
// TODO: Solve the error. Apparently you are not ssupposed to output anything before calling header function but after commenting the code out, the function on item page wont work.
exit();
?>