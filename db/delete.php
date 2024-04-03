<?php
 require "config.php";
 $id=$_REQUEST['id'];
 $delete="DELETE FROM `reg` WHERE `id`='$id'";
 $result=mysqli_query($con,$delete);
 header("location:detail.php");
?>
