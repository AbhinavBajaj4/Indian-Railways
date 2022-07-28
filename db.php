<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost";
$username = "root";
$password = "Abhinav@123";
$dbname = "railwaydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
 die("Connection failed: " . $conn->connect_error);
}
?>
