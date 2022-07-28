<html>
<body style=" background-image: url(img/img5.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" >

<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";

$pwd=md5($_POST["password"]);
$eid=$_POST["emailid"];
$mno=$_POST["mobileno"];
$dob=$_POST["dob"];

$sql = "INSERT INTO user (password,emailid,mobileno,dob) VALUES ('".$pwd."','".$eid."','".$mno."','".$dob."')";
// echo $sql;

if ($conn->query($sql) === TRUE)
{
 echo "Hi $eid, <a href=\"http://localhost/project/index.htm\"> Click here </a> to browse through our website!!! " ;
}
else
{
 echo "Error:" . $conn->error. "<br> <a href=\"http://localhost/project/index.htm#new_user\">Go Back to Login!!!</a> ";
}

$conn->close();
?>

</body>
</html>
