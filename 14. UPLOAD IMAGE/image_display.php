<?php
	include "croma_sql.php";
?>

<?php

	$result = mysqli_query($con, "SELECT * FROM media");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Images</title>
</head>
<body>
		<h2>All Images</h2>
		<table border="10px" bordercolor="#0009bb" width="95%" cellspacing="15" align="center" style="background-color: lightgreen">
			<thead>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Old Price</th>
				<th>New Price</th>
				<th style="color: #124b1e; font-size: 20px;" colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$sql = "SELECT * FROM media";

				$result = mysqli_query($con,$sql);

				while($data = mysqli_fetch_array($result))
				{
			?>
				<tr>
					<td><img src="uploads/<?php echo $data['image']; ?>" style="height: 150px; width: 200px;"></td>
					<td><?php echo $data['productname']; ?></td>
					<td><?php echo $data['old_price']; ?></td>
					<td><?php echo $data['new_price']; ?></td>
					<td><a href="image_update.php?editid=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure To Update ?')">Edit</td>
					<td><a href="image_delete.php?delid=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure To Delete ?')">Delete</td>
					
				</tr>
			<?php 
				}
			?>

			</tbody>
		</table>
		
</body>
</html>