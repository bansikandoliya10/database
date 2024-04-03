<?php
include"config.php";
$sql="SELECT * FROM `reg`";
$result=mysqli_query($con,$sql);
?>
<html>
<body>
	<h2 align="center"> registration datails </h2>
	<table align="center" border="1px solid">
	<tr>
		<th> id </th>
		<th> name </th>
		<th> email </th>
		<th> contact </th>
		<th> update </th>
		<th> Delete </th>
		</tr>
	<?php
		while($data=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
		<td><?php echo $data ['id'];?></td>
		<td><?php echo $data ['name'];?></td>
		<td><?php echo $data ['email'];?></td>
		<td><?php echo $data ['contact'];?></td>
		<td><a href="update.php? id=<?php echo $data ['id'];?>">update</a></td>
		<td><a href="delete.php? id=<?php echo $data ['id'];?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
		</table>
		</body>
		</html>
		
		


		