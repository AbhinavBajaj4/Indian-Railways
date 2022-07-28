<html>
<body style=" background-image: url(img/img5.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" >

<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
$_SESSION=array();
session_destroy();

?>
<div align="center">
<form action="enquiry_result.php" method="post">

Starting Point: <select id="sp" name="sp" required>

<?php

require "db.php";

            $cdquery="SELECT sname FROM station";
            $cdresult=mysqli_query($conn,$cdquery);


            echo " <option value = \"\" >

                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['sname'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";

            }
?>

</select>
<br><br>

Destination Point: <select id="dp" name="dp" required>

<?php

require "db.php";

            $cdquery="SELECT sname FROM station";
            $cdresult=mysqli_query($conn,$cdquery);

            echo " <option value = \"\" >

                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['sname'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";

            }
?>

</select>
<br><br>

Date of Journey: <input type="date" name="doj" required><br>
<input type="submit">

</form>
<br><br><a href="http://localhost/project/index.htm" >Go to Home Page!!!</a>
</body>
</html>
