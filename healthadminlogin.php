<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="health"&&$pass=="hea123")
{
	echo "<script>window.location.assign('healthafteradminlogin.php');</script>";
}
else
{
	readfile('healthadminlogin2.html');
}


?>