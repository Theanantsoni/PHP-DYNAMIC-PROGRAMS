<?php
	include "croma_sql.php";

	if(isset($_POST['btnsubmit']))
	{
		$filename = $_FILES['fileimage']['name'];
		$filedesc = $_POST['filename'];
		$fileoldprice = $_POST['fileoldprice'];
		$filenewprice = $_POST['filenewprice'];

		$tempname = $_FILES['fileimage']['tmp_name'];

		move_uploaded_file($tempname, 'uploads/' .$filename);

		$sql = "INSERT INTO media (image) VALUES ('".$filename."')";

		$sql = "INSERT INTO media VALUES (0,'$filename','$filedesc','$fileoldprice','$filenewprice')";
		$result = mysqli_query($con,$sql);

		if($result)
		{
			echo "insert";
			header('location: image_display.php');
		}
		else
		{
			echo "error";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h2>Image Upload</h2>
		<form method="POST" enctype="multipart/form-data">
				<label>Upload File : </label>
				<input type="file" name="fileimage">

				<label>Name : </label>
				<input type="text" name="filename">

				<label>Old Price : </label>
				<input type="text" name="fileoldprice">

				<label>New Price : </label>
				<input type="text" name="filenewprice">

			<button type="submit" name="btnsubmit">Submit</button>
		</form>
</body>
</html>