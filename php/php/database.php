<?php
class database
{
var $con,$res;
function connect()
{
$this->con=mysqli_connect("localhost","root","");
mysqli_select_db($this->con,"og");
}

function execute($qry)
{
$this->connect();
$this->res=mysqli_query($this->con,$qry);
return $this->res;
}
}
?>