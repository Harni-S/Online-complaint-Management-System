<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="panchayat"&&$pass=="pan123")
{
	echo "<script>window.location.assign('panchayatafteradminlogin.php');</script>";
}
else
{
	readfile('panchayatadminlogin2.html');
}


?>