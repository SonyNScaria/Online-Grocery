<?php
include_once("database.php");
class login
{
function insert($id,$email,$pass)
{
$qry="insert into users (id,email,pass) values ($id,'$email','$pass')";
$ob=new database();
$ob->execute($qry);
}

function check($user,$pass)
{
echo $qry="select * from users where email='$user' and password='$pass'";
$ob=new database();
return $ob->execute($qry);
}
}
?>
