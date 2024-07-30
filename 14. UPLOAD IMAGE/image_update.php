<?php
	include "croma_sql.php";

	if(isset($_GET['editid']))
	{
		$editid = $_GET['editid'];

		$sql = "SELECT * FROM media WHERE id= '".$editid."' ";
		$result=mysqli_query($con,$sql);
		$editdata = mysqli_fetch_array($result);
	}

		if(isset($_POST['btnsubmit']))
		{

			if($_FILES['fileimage']['name'] != "")
			{
				$filename = $_FILES['fileimage']['name'];

				$tempname = $_FILES['fileimage']['tmp_name'];

				move_uploaded_file($tempname, 'uploads/' .$filename);

			/*$sql = "INSERT INTO your_table (image, exchange_name, old_price, new_price) 
                    VALUES ('$newFileName', '$newName', '$newOldPrice', '$newNewPrice')";*/
			}
			else
			{
				$filename = $_POST['oldimage'];
			}

			$filedesc = $_POST['filenewname'];
			$fileoldprice = $_POST['filenewoldprice'];
			$filenewprice = $_POST['filenewnewprice'];

			$sql = "UPDATE media SET image='".$filename."', productname='$filedesc', old_price='$fileoldprice', new_price='$filenewprice' WHERE id= '$editid' ";

			$result = mysqli_query($con,$sql);

			if($result)
			{
				echo "Data Updated Successfully";

				header('location: image_display.php');
			}
			else
			{
				echo "error";
			}
		} 
?>




<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h2>Image Upload</h2>
			<form method="POST" enctype="multipart/form-data">

			<div class="form-control">
				<div>
			
					<label>Exchange  Upload File</label>
					<img src="uploads/<?php echo $editdata['image']; ?>" style="height: 100px;">

					<input type="hidden" name="oldimage" value="<?php echo $editdata['image']; ?>">

					<input type="file" name="fileimage" value="<?php echo $editdata['image']; ?>" style="height: 100px;">

				</div>

				<br><br><br>

				</div>

					<label>Exchange Name : </label>
					<input type="text" name="filenewname" value="<?php echo $editdata['productname']; ?>">

				</div>

				<br><br><br>

				<div>

					<label>Exchange Old Price : </label>
					<input type="text" name="filenewoldprice" value="<?php echo $editdata['old_price']; ?>">

				</div>

				<br><br><br>

				<div>

					<label>Exchange New Price : </label>
					<input type="text" name="filenewnewprice" value="<?php echo $editdata['new_price']; ?>">

				</div>

				<br><br><br>

				<div>

					<button type="submit" name="btnsubmit">Submit</button>

				</div>

			</div>
			</form>
</body>
</html>



<?php
	/*include "croma_sql.php";

	if(isset($_GET['editid']))
	{
		$editid = $_GET['editid'];

		$sql = "SELECT * FROM media WHERE id= '".$editid."' ";
		$result=mysqli_query($con,$sql);
		$editdata = mysqli_fetch_array($result);
	}

		if(isset($_POST['btnsubmit']))
		{

			if($_FILES['fileimage']['name'] != "")
			{
				$filename = $_FILES['fileimage']['name'];

				$tempname = $_FILES['fileimage']['tmp_name'];

				move_uploaded_file($tempname, '../assests/uploads/' .$filename);
			}
			else
			{
				$filename = $_POST['oldimage'];
				$filedesc = $_POST['filename'];
				$fileoldprice = $_POST['fileoldprice'];
				$filenewprice = $_POST['filenewprice'];
			}

			$sql = "INSERT INTO your_table (image, exchange_name, old_price, new_price) 
                    VALUES ('$newFileName', '$newName', '$newOldPrice', '$newNewPrice')";
			$result = mysqli_query($con,$sql);

			if($result)
			{
				echo "Data Updated Successfully";
				header('location: image_display.php');
			}
			else
			{
				echo "error";
			}
		} */
?>