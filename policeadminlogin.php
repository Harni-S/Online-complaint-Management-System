<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="police"&&$pass=="pol123")
{
	echo "<script>window.location.assign('policeafteradminlogin.php');</script>";
}
else
{
	readfile('policeadminlogin2.html');
}


?>