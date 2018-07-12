<?php
include_once("database.php");
class profile
{
function insert($name,$email,$pass,$phone,$address)
{
$qry="insert into users (name,email,password,phone,address) values ('$name','$email','$pass','$phone','$address')";
$ob=new database();
$ob->execute($qry);
}

function check($user,$pass)
{
$qry="select * from users where email='$user' and password='$pass'";
$ob=new database();
return $ob->execute($qry);
}
function selectemail($email)
{
$qry="select * from profile where email='$email'";
$ob=new database();
return $ob->execute($qry);
}
function selectn($email)
{
$qry="select * from profile where firstname='$email'";
$ob=new database();
return $ob->execute($qry);
}
function selectid($id)
{
	$qry="select * from users where id=$id";
$ob=new database();
return $ob->execute($qry);
}
}
?>