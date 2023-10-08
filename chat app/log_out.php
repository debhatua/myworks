
<?php
include("server connect.php");



$globlcontact=$_POST['sen'];
date_default_timezone_set("Asia/kolkata");
 $p=date("H:i:s");
 $dat= date("Y-m-d");

error_reporting(E_ALL);
$cmd8 = "update login set status='N',logdate='$dat',logtime='$p' where mobile=$globlcontact"; //query
$x8 = mysqli_query($con, $cmd8);

?>

