<html>
<body style="background-image: url(img/img9.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">

<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";

$query="SELECT * FROM resv where status='BOOKED' ";
$result=mysqli_query($conn,$query);

echo "<table><thead><td>PNR</td><td>Id</td><td>Train_no</td><td>Date_Of_Journey</td><td>Fare</td><td>Train_Class</td><td>Seats</td><td>Status</td></thead>";

while ($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td></tr>";
}

echo "</table>";

echo "<br> <a href=\"http://localhost/project/admin_login_1.php\" style= \"color:black\">Go Back to admin Menu!!!</a> ";

$conn->close();
?>


</body>
</html>
