<?php
include"config.php";
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];

$update="update `reg` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE `id`='$id'";
$result = mysqli_query($con,$update);
header("location:detail.php");
?>