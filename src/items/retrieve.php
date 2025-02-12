<?php
include 'db.php'; 
$sql = "select * from items";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
        echo "itemid:" . $row["itemid"] . "Item Name:". $row["item_name"]."Image:". $row["img"] 
        
        ."Price:". $row["price"]. "Price per Kilo". $row["price_kilo"] . "Type" . $row["item_type"]
        ."Country:". $row["country"]. "Company:". $row["company"] . "Ingredients:". $row["ingred"]
        ."Allergies:". $row["allergies"]
        ."<br>";
    }
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}
 
$conn->close();
?>

