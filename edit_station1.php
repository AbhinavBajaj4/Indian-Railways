<html>
<body style=" background-image: url(img/img4.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">

<?php
error_reporting(E_ALL ^ E_WARNING); 
require "db.php";
$sql = "UPDATE `station` SET `sname`='".$_POST["station"]."' where id= ('".$_GET["id"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Station updated successfully";
} else {
    echo "Error:" . $conn->error;
}



?>

</body>
</html>
