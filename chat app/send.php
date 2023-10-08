<?php

include("server connect.php");

$pass=0;
$msg = $_POST['msg'];
echo $msg;
$c = $_POST['rec'];
$globlcontact = $_POST['sen'];
date_default_timezone_set("Asia/kolkata");
$p = date("H:i:s");
$dat = date("Y-m-d");
error_reporting(E_ALL);

$cmd_chk = "select * from block where blocked_r=$c ";
$x_c = mysqli_query($con, $cmd_chk);

while($r12 = mysqli_fetch_assoc($x_c)) {

if($r12['user']==$globlcontact )
{
  $pass=1;
  break;
}

}
if($pass!=1 ){
$cmd8 = "insert into chat value ($globlcontact,$c,'$msg','$dat','$p') "; //query
$x8 = mysqli_query($con, $cmd8);
}
else
{
$cmd8 = "insert into chat value ($globlcontact,$c,'both has been blocked ,tap block/unblock to chat','$dat','$p') "; //query
$x8 = mysqli_query($con, $cmd8);
}



$tr = date("H") - 2;

include("server connect.php");
$cmd81 = "select count(msg) from chat where time>='$tr:00:00' and time<'$p'"; //query
$x82 = mysqli_query($con, $cmd81);
if ($r21 = mysqli_fetch_assoc($x82)) {
    if ($r21['count(msg)'] > 4) {
        $cmd84 = "delete from chat where date<='$dat' and time>='$tr:00:00' and time<'$p'"; //query
        $x87 = mysqli_query($con, $cmd84);
    }
}
?>