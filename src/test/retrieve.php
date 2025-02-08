<?php
include 'db.php'; 
$sql = "select * from users";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
        echo "id:" . $row["userid"] . "First Name:". $row["fname"]."Last Name:". $row["lname"] 
        
        ."E-mail:". $row["email"]. "Password". $row["password"] . "IsCorp" . $row["iscorp"]
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

