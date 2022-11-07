<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="revenue"&&$pass=="rev123")
{
	echo "<script>window.location.assign('revenueafteradminlogin.php');</script>";
}
else
{
	readfile('revenueadminlogin2.html');
}


?>