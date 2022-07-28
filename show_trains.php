<html>
<body style=" ;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">


<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";

$cdquery="SELECT * FROM train";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Train_no</td><td>Train_name</td><td>Starting_Point</td><td>Arrival_Time</td><td>Destination_Point</td><td>Departure_Time</td><td>Day</td><td>Distance</td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult))
{
	echo "
<tr><td>".$cdrow['trainno']."</td><td>".$cdrow['tname']."</td><td>".$cdrow['sp']."</td><td>".$cdrow['st']."</td><td>".$cdrow['dp']."</td><td>".$cdrow['dt']."</td><td>".$cdrow['dd']."</td><td>".$cdrow['distance']."</td><td><a href=\"http://localhost/project/schedule.php?trainno=".$cdrow['trainno']."\"><button>Schedule</button></a></td></tr>
";
}
echo "</table>";

echo " <br><a href=\"http://localhost/project/insert_into_train_3.php\"> Add New Train </a><br> ";
echo " <br><a href=\"http://localhost/project/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>
