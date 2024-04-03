<?php
include "config.php";
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];

$insert="INSERT INTO`reg`(`name`,`email`,`contact`) values ('$name','$email','$contact')";
$result=mysqli_query($con,$insert);
if($result==true)
{
	header("location:form.php");
}
else
{
	echo"not";
}
?>
