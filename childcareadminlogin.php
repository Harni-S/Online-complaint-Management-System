<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="childcare"&&$pass=="chi123")
{
	echo "<script>window.location.assign('childcareafteradminlogin.php');</script>";
}
else
{
	readfile('childcareadminlogin2.html');
}


?>