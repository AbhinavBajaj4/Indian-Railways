<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body style=" background-image: url(img/img10.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

<div align="center">
<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
//$_SESSION["admin_login"]=False;
if($_POST["uid"]=='Sahil' AND $_POST["password"]=='admin123')
{
$_SESSION["admin_login"]=True;
}

if($_SESSION["admin_login"]==True)
{
echo " <br><a href=\"http://localhost/project/insert_into_stations.php\" style= \"color:black\"> Show All Stations </a><br> ";
echo " <br><a href=\"http://localhost/project/show_trains.php\" style= \"color:black\"> Show All Trains </a><br> ";
echo " <br><a href=\"http://localhost/project/show_users.php\" style= \"color:black\"> Show All Users </a><br> ";
echo " <br><a href=\"http://localhost/project/insert_into_train_3.php\" style= \"color:black\"> Enter New Train </a><br> ";
echo " <br><a href=\"http://localhost/project/insert_into_classseats_3.php\" style= \"color:black\"> Enter Train Schedule </a><br> ";
echo " <br><a href=\"http://localhost/project/booked.php\" style= \"color:black\"> View all booked tickets </a><br> ";
echo " <br><a href=\"http://localhost/project/cancelled.php\" style= \"color:black\"> View all cancelled tickets </a><br><br> ";
echo " <br><a href=\"http://localhost/project/index.htm#Admin_login\" style= \"color:black\"> Logout!!!</a><br> ";

}
else
{
echo "
<h1>Wrong User Id/Password</h1><h3>Please try again</h3>
<br><form action=\"admin_login.php\" method=\"post\">
User ID: <input type=\"text\" name=\"uid\" required><br>
Password: <input type=\"password\" name=\"password\" required><br>
<input type=\"submit\">
</form>
";
}


?>

</div>
</body>
</html>
