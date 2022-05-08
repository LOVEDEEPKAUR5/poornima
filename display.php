<table align="center" width="800" border="1">
	<tr>
		<td>S.No</td>
		<td>Mobile</td>
		<td>Permanent_Address</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php
	include "connection.php";
	$sql="select * from info";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
?>
        <tr>
			<td><?php echo $row['roll_no'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['permanent_add'];?></td>
			<td><a href="edit.php?uid=<?php echo $row['roll_no'];?>">Edit</a></td>
			<td><a href="delete.php?uid=<?php echo $row['roll_no'];?>">Delete</a></td>
		</tr>
	<?php
	}
	?>
	</table>