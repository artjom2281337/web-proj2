<?php include 'db.php' ;
$item_name = $_POST['item_name'];
$img= $_POST['img'];
$price= $_POST['price'];
$price_k= $_POST['price_kilo'];
$type= $_POST['item_type'];
$country= $_POST['country'];
$company= $_POST['company'];
$ingred= $_POST['ingred'];
$allerg= $_POST['allergies'];
$sql="INSERT INTO items (item_name,img,price,price_kilo,item_type,country,company,ingred,allergies)
VALUES('$item_name','$img', '$price', '$price_k', '$type', '$country', '$company', '$ingred', '$allerg')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>