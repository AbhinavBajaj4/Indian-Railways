<html>
<body style=" background-image: url(img/img6.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">


<?php
error_reporting(E_ALL ^ E_WARNING);
require "db.php";
$cdquery="SELECT * FROM user WHERE user.mobileno='".$_POST["mno"]."' and user.emailid='".$_POST["email"]."' and user.dob='".$_POST["dob"]."'";
$cdresult=mysqli_query($conn,$cdquery);
$cdrow=mysqli_fetch_array($cdresult);

if(mysqli_num_rows($cdresult)==0)
{
 echo "No such login!!! <br><br> ";
 echo " <a href=\"http://localhost/project/forgot.php\">Fill details again</a><br>";
 die();
}

else
{
  echo "
<table>
<thead><td>Id</td><td>Email_Id</td><td>Password</td><td>Mobile_no</td><td>Date_Of_Birth</td></thead>
";
echo "
<tr><td>".$cdrow["id"]."</td>
<form action=\"update.php\" method=\"post\">
<td><input type=\"text\" name=\"emailid\" value=\"".$cdrow["emailid"]."\" required></td>
<td><input type=\"text\" name=\"password\" value=\"new password\" required></td>
<td><input type=\"text\" name=\"mobileno\" value=\"".$cdrow["mobileno"]."\" required></td>
<td><input type=\"date\" name=\"dob\" value=\"".$cdrow["dob"]."\" required></td></tr>";
echo "</table><input value='Update Record' type=\"submit\"></form>";
}

echo " <br><br><a href=\"http://localhost/project/index.htm#edit_user\">Go Back to Home!!!</a><br> ";

$conn->close();
?>


</body>
</html>
