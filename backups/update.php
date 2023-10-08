<?php
include("server connect.php");

//print_r($_POST);

$nm=$_POST['name'];
//echo $msg;
$c=$_POST['rec'];
$globlcontact=$_POST['sen'];

error_reporting(E_ALL);
$cmd8 = "update user$globlcontact set name='$nm' where number=$c"; //query
$x8 = mysqli_query($con, $cmd8);

?>