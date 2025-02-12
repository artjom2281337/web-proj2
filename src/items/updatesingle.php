<?php
include 'db.php';
$a = $_GET['itemid'];
$result = mysqli_query($conn,"SELECT * FROM items WHERE itemid= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Item name: <br>
<input type="text" name="item_name"  value="<?php echo $row['item_name']; ?>">
<br>
Image :<br>
<input type="text" name="img" value="<?php echo $row['img']; ?>">
<br>
Price:<br>
<input type="text" name="price" value="<?php echo $row['price']; ?>">
<br>
Price per kilo:<br>
<input type="text" name="price_kilo" value="<?php echo $row['price_kilo']; ?>">
Type:<br>
<input type="text" name="item_type" value="<?php echo $row['item_type']; ?>">
Country:<br>
<input type="text" name="country" value="<?php echo $row['country']; ?>">
Company:<br>
<input type="text" name="company" value="<?php echo $row['company']; ?>">
Ingredients:<br>
<input type="text" name="ingred" value="<?php echo $row['ingred']; ?>">
Allergies:<br>
<input type="text" name="allergies" value="<?php echo $row['allergies']; ?>">

<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $item_name = $_POST['item_name'];
    $query = mysqli_query($conn,"UPDATE items set item_name='$item_name' where itemid='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
?>
</body>
</html>