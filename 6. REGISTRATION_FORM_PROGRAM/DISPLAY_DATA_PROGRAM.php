<?php
	if(isset($_POST['btnsubmit']))
	{
		$no1=$_POST['txtno1'];
		$no2=$_POST['txtno2'];
		$no3=$_POST['txtno3'];
		$no4=$_POST['txtno4'];
		$no5=$_POST['txtno5'];
		$no6=$_POST['txtno6'];
		$no7=$_POST['txtno7'];
		$no8=$_POST['txtno8'];
		$no9=$_POST['txtno9'];
	}
?>

<html>
	<head>
		<title></title>
	</head>
<body bgcolor="black">
<center>
<h1 style="color:skyblue";>Your Form Is Successfully Registration </h1>
<table border="5" border="5" bordercolor="darkblue" width="50%">
	<tr>
		<th>
			<font face="" color="red">
				Your First Name Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no1;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Middel Name Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no2;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Last Name Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no3;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Mobile Number Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no4;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Email Address Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no5;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Home Address Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no6;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your City Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no7;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your State Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no8;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="" color="red">
				Your Country Is : 
			</font>
		</th>
		<td>
			<font face="" color="Yellow">
				<?php
					echo $no9;
				?>
			</font>
		</td>
	</tr>

</table>
</center>
</body>