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

//if($_POST["station"]=="")
echo "
<form action=\"edit_station1.php?id=".$_GET["id"]."\" method=\"post\">
Enter The New Name of Station : <br><br>
<input type=\"text\" name=\"station\" required>
<input type=\"submit\">
</form>
";



echo "<br> <a href=\"http://localhost/project/admin_login_1.php\">Go Back to Admin Menu!!!</a> ";

$conn->close();
?>

</body>
</html>
