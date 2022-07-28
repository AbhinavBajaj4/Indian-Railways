<html>

<body style="background-image: url(img/img3.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" >

<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();

require "db.php";

$pnr=$_POST["cancpnr"];
$uid=$_SESSION["id"];
//echo "$uid";

$sql=" UPDATE resv SET status ='CANCELLED' WHERE resv.pnr='".$pnr."' AND resv.id='".$uid."' ";

if ($conn->query($sql) === TRUE)
{
 echo "Cancellation Successful!!!";
}
else
{
 echo "<br><br>Error:" . $conn->error;
}

echo " <br><br><a href=\"http://localhost/project/index.htm\">Home Page</a><br>";

$conn->close();
?>

</body>
</html>
