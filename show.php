<table align="center" width="800" border="1">
	<tr>
		<td>S.No</td>
		<td>Name</td>
		<td>Email Id</td>
		<td>Mobile</td>
		<td>Address</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php
	include "connection.php";
	$sql="select * from user";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
?>
        <tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><a href="edit.php?uid=<?php echo $row['id'];?>">Edit</a></td>
			<td><a href="delete.php?uid=<?php echo $row['id'];?>">Delete</a></td>
		</tr>
	<?php
	}
	?>
	</table>