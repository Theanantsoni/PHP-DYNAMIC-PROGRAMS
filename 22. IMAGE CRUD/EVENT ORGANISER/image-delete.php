<?php

	include "connection.php";

	if(isset($_GET['id']))
	{
		$delete = "DELETE FROM e_gallery WHERE eg_id= $_GET[id]";

		mysqli_query($conn, $delete);

		header('location: gallery.php');
	}
?>