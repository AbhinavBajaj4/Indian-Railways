<html>
<body style="
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">

<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";

$cdquery="SELECT * FROM user";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Id</td><td>Email_Id</td><td>Password</td><td>Mobile_no</td><td>Date_Of_Birth</td><td></td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult))
{
	echo "
<tr><td>".$cdrow[0]."</td><td>".$cdrow[1]."</td><td>".$cdrow[2]."</td><td>".$cdrow[3]."</td><td>".$cdrow[4]."</td>

";
}
echo "</table>";

echo " <br><a href=\"http://localhost/project/index.htm#new_user\"> Add New User </a><br> ";
echo " <br><a href=\"http://localhost/project/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>
