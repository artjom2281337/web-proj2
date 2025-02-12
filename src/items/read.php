<?php
include 'db.php'; 
$sql = "select * from items";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table border=\"1\"><tr><th>itemID</th><th>Item Name</th><th>Image</th>
<th>Price</th><th>Price for kilo</th><th>Type</th><th>Country</th><th>Company</th><th>Ingredients</th><th>Allergies</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["itemid"] . "</td><td>". $row["item_name"]."</td> <td>". $row["img"] 
        ."</td><td>". $row["price"]. "€". "</td><td>". $row["price_kilo"]."€"
        ."</td><td>". $row["item_type"]."</td><td>". $row["country"]."</td><td>". $row["company"]."</td><td>"
        . $row["country"]."</td><td>". $row["ingred"]."</td><td>". $row["allergies"]."</td><tr>";
    }
    echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}


$conn->close();
?>