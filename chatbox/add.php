<?php
$globlcontact=$_GET['mobile'];
include("server connect.php"); 
//add contact
error_reporting(E_ALL^E_WARNING);
$adduser=$_POST['nm'];
$addnum=$_POST['mob'];	
if(isset($_POST['add']) ){

	//$sqlchck1="select * from user$globlcontact where number<>$addnum";
	//$result13=mysqli_query($con,$sqlchck1);
	//$f7=mysqli_affected_rows($con);
	//if($f7==null) 
	//{
		$sq="insert into user$globlcontact value ('$adduser',$addnum)"; //query 
		$result7=mysqli_query($con,$sq);
		$f8=mysqli_affected_rows($con);// total contacts by user
	//}
}




?>