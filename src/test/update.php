
<?php
require 'db.php'; 
$sql = "select * from users";
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
<th>ID</th><th>First Name</th><th>Last Name</th>
<th>E-mail</th><th>Password</th> <th>IsCorp</th>
<th>Edit</th><th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["userid"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["lname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["iscorp"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['userid']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a></td>
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