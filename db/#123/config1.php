<?php
$con=mysqli_connect("localhost","root","","pg");
if($con==true)
{
   echo	"yes";
}
else
{
	echo "no";
}
?>