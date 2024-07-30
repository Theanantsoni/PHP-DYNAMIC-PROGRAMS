<?php
	if(isset($_POST['btnsubmit']))
	{
		$name=$_POST['txtname'];
		$age=$_POST['txtage'];
		$email=$_POST['txtemail'];
		$city=$_POST['txtcity'];
		$product=$_POST['selproduct'];
		$quantity=$_POST['txtqty'];
		$degree=$_POST['productprice'];
		$pay=$degree*$quantity;
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chroma Store</title>
</head>
<body bgcolor="skyblue">

		<h1 align="center" style="color:red">Payment Recipt</h1>

<table border="5" bordercolor="red" width="50%" align="center">
	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Customer Name Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $name;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Customer Age Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $age;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Customer email Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $email;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Customer city Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $city;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				product Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $product;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Quantity Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $quantity;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				 Product Price Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $degree;
			?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font face="Segoe Print" size="5">
				Payment Is : 
			</font>
		</th>
		<td>
			<font face="Segoe Print" size="5">
			<?php
				echo $pay."/- for ".$quantity. " product ";
			?>
			</font>
		</td>
	</tr>

</table>
</body>
</html>