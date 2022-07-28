<html>
<body style=" background-image: ;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">


<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";

$cdquery="SELECT id,sname FROM station";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Id</td>\t\t<td>Station</td><td></td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult))
{
 $cdId=$cdrow['id'];$cdTitle=$cdrow['sname'];
	echo "
<tr><td>$cdId</td>\t\t<td>$cdTitle</td>\t\t<td><a href=\"http://localhost/project/edit_station.php?id=".$cdId."\"><button>Edit</button></a></td>\t\t<td><a href=\"http://localhost/project/delete_station.php?id=".$cdId."\"><button>Delete</button></a></td></tr>
";
}
echo "</table>";

?>
<br>
<span><form action="insert_into_station.php" method="post">
Add Station : <input type="text" name="sname" placeholder=" New Station" required>
<input type="submit" value="Add"></span>
<?php
echo "<br><br> <a href=\"http://localhost/project/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>
