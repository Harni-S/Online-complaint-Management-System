<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="pwd"&&$pass=="pwd123")
{
	echo "<script>window.location.assign('pwdafteradminlogin.php');</script>";
}
else
{
	readfile('pwdadminlogin2.html');
}


?>