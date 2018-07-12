<?php
session_start();
include_once("loginclass.php");
$a=$_POST["email"];
$b=$_POST["password"];
echo $a;
$ob1=new login();
$res=$ob1->check($a,$b);
$r=mysqli_num_rows($res);
if($r==0)
{
header("Location:index.php");
}
else
{
$d=mysqli_fetch_array($res);
$_SESSION["id"]=$d[0];
header("Location:Home.php");
}
?>