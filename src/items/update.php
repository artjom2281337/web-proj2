
<?php
require 'db.php'; 
$sql = "select * from items";
$result = $conn->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update Data</title>
</head>
<body>
    <a href="form.php" class="top">Create Data </a>
    <a href="update.php" class="top">Update/Delete Data </a>
    <a href="read.php" class="top">Retrieve Data </a>
<hr>
<table border="1" cellpadding="5">
<tr>
<th>itemID</th><th>Item Name</th><th>Image</th>
<th>Price</th><th>Price_Kilo</th> <th>Type</th>
<th>Country</th><th>Company</th><th>Ingredients</th>
<th>Allergies</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["itemid"]; ?></td>
<td><?php echo $row["item_name"]; ?></td>
<td><?php echo $row["img"]; ?></td>
<td><?php echo $row["price"]?> <?php echo "€"; ?></td>
<td><?php echo $row["price_kilo"]?> <?php echo "€";?></td>
<td><?php echo $row["item_type"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><?php echo $row["company"]; ?></td>
<td><?php echo $row["ingred"]; ?></td>
<td><?php echo $row["allergies"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['itemid']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['itemid']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
</body>
</html>