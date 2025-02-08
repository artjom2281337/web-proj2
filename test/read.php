<?php
include 'db.php'; 
$sql = "select * from users";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table border=\"1\"><tr><th>ID</th><th>First Name</th><th>Last Name</th>
<th>E-mail</th><th>Password</th><th>IsCorp</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["userid"] . "</td><td>". $row["fname"]."</td> <td>". $row["lname"] 
        
        ."</td><td>". $row["email"]. "</td><td>". $row["password"]
        ."</td></tr>". $row["iscorp"]."</td><tr>";
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