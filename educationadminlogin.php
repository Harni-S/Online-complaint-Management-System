<?php
$name=$_POST['name'];
$pass=$_POST['passw'];

if($name=="education"&&$pass=="edu123")
{
	echo "<script>window.location.assign('educationafteradminlogin.php');</script>";
}
else
{
	readfile('educationadminlogin2.html');
}


?>