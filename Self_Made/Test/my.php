<?php
$con = newsqli('localhost','root','',''); 

if ($con) {
	echo "Successfull";
}
else
{
	die(mysqli_error($con));
}

?>
