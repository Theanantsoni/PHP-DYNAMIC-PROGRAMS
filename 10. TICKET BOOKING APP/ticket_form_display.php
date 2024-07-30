<?php
	if(isset($_POST['txtsubmit']))
	{
		$name=$_POST['txtname'];
		$age=$_POST['txtage'];
		$bod=$_POST['txtbod'];
		$cnct=$_POST['txtcntct'];
		$city=$_POST['txtcity'];
		$srce=$_POST['txtsrce'];
		$dstnation=$_POST['txtdstnsn'];
		$price=$_POST['ticketprice'];
		$cnt=$_POST['txtcnt'];
		$coach=$_POST['txtcoch'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="skyblue">
	<center>
		<h1 style="color:red">------------------------------Your Ticket Is Successfully Registration------------------------------</h1>
		<table border="5" bordercolor="red">

			<tr>
				<th>
					<font>
						Tourist Name :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $name;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Age :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $age;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Birth Date :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $bod;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Contact Number :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $cnct;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist City :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $city;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Source :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $srce;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Destination :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $dstnation;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Ticket Counting :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $cnt;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Tourist Coach :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $coach;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						You Have To Pay :
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $price;
						?>
					</font>
				</td>
			</tr>

		</table>
		<h3 style="color:red">Please Keep This File With You</h3>
		<h3 style="color:red">Thank You...!!</h3>
	</center>
</body>
</html>