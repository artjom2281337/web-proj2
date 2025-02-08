<?php include 'db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pass= $_POST['password'];
$iscorp= $_POST['corp_cus'];
$sql="INSERT INTO users (fname,lname,email,password,iscorp)
VALUES('$fname', '$lname', '$email', '$pass', '$iscorp')";

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