<?php
include 'db.php';
$a = $_GET['userid'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE userid= '$a'");
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
First Name: <br>
<input type="text" name="fname"  value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>">
<br>
Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br>
Password:<br>
<input type="text" name="password" value="<?php echo $row['password']; ?>">
IsCorp:<br>
<select name="iscorp"> 
    <option value="1"> Yes </option>
    <option value="0"> No </option>
</select>
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $fname = $_POST['fname'];
    $query = mysqli_query($conn,"UPDATE users set fname='$fname' where userid='$a'");
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