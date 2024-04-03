<?php
include "config.php";
$id=$_REQUEST['id'];
$sql="select * from `reg` where `id`='$id'";
$result= mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($result);
?>

<html>
<body>
	
	
<form action="updateaction.php?id=<?php echo $data['id'];?>"method="post">
	<div class="container">
	<h1>update details</h1>
	
	<label for="name"><b>name</b></label>
	<input type="text" name="name" value="<?php echo $data['name']?>"required><br>
	<label for="email"><b>email</b></label>
	<input type="text" name="email" value="<?php echo $data['email']?>"required><br>
	<label for="contact"><b>contact</b></label>
	<input type="text" name="contact" value="<?php echo $data['contact']?>"required><br>
	<input type="submit" name="btnsubmit" value="register">
	<input type="reset" name="btnclear" value="clear">
	</div>
	</form>
	</body>
	</html>
	
	