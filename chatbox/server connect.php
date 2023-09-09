<?php
$con=mysqli_connect("localhost","root","") or die("<br> failed to connect".mysql_error());
$db=mysqli_select_db($con,"logchat") or die(mysql_error());
?>