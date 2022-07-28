<html>
<body style=" background-image: url(img/img6.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">


<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";
$pwd=md5($_POST["password"]);
$sql = "UPDATE `user` SET `emailid`='".$_POST["emailid"]."',`password`='" .$pwd."',`mobileno`='".$_POST["mobileno"]."',`dob`='".$_POST["dob"]."' WHERE id='".$_GET["id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "User details updated successfully";

} else {
    echo "Error:" . $conn->error;
}
echo " <br><br><a href=\"http://localhost/project/index.htm#edit_user\">Go Back to Home!!!</a><br> ";

$conn->close();
?>


</body>
</html>
