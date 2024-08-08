<?php
	if(isset($_POST['btnsubmit']))
	{
		$usrt=$_POST['txtuscur'];
		$canrt=$_POST['txtcancur'];
		$pndrt=$_POST['txtpndcur'];
		$ynrt=$_POST['txtyencur'];
		$drhm=$_POST['txtdrhmcur'];
		
		$rsrt=$_POST['txtindcur'];

		$rsusrt=$usrt*$rsrt;
		$rscanrt=$canrt*$rsrt;
		$rspndrt=$pndrt*$rsrt;
		$rsynrt=$ynrt*$rsrt;
		$rsdrhm=$drhm*$rsrt;
?>

<?php/*------------------------------------------------------?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="#000661">

	<center>

	<h1 style="color:white; padding-top: 5px; font-size:30px; padding-bottom:5px; border:solid 10px; border-color: yellow; margin:5px 10px;">------------------------Welcome To Indian Money Converter App------------------------</h1> <br><br>
	<table border="5" bordercolor="yellow" width="50%">
	<tr>
		<th>
			<font style="color:white;" size="5.5">
				A. Today's Rate Of US Dollar Is : 
			</font>
		</th>

		<td>
			<font style="color:white;" size="5.5">
				<?php
					echo $usrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:white;" size="5.5">
				B. Today's Rate Of Canadian Dollar Is :  
			</font>
		</th>

		<td>
			<font style="color:white;" size="5.5">
				<?php
					echo $canrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:white;" size="5.5">
				C. Today's Rate Of Pound Is :   
			</font>
		</th>

		<td>
			<font style="color:white;" size="5.5">
				<?php
					echo $pndrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:white;" size="5.5">
				D. Today's Rate Of Yen Is :   
			</font>
		</th>

		<td>
			<font style="color:white;" size="5.5">
				<?php
					echo $ynrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:white;" size="5.5">
				E. Today's Rate Of Dirham Is : 
			</font>
		</th>

		<td>
			<font style="color:white;" size="5.5">
				<?php
					echo $drhm;
				?>
			</font>
		</td>
	</tr>

	</table>

	<br><br>
		<font style="color:white; font-size: 30px;">
		<?php
			echo "You Enter Amount ".$rsrt."/- That You Want To Convert Into Indian Rupees : ";
		?>
		</font>
	<br><br>

	<table border="5" bordercolor="yellow" width="50%">
		
		<tr>
			<th>
				<font style="color:white;" size="5.5">
					A. US Dollar Amount Into Indian Ruppe Is : 
				</font>
			</th>
			<td>
				<font style="color:white;" size="5.5">
				<?php
					echo "".$rsusrt."/- INR";
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:white;" size="5.5">
					B. Canadian Dollar Amount Into Indian Rupee Is : 
				</font>
			</th>
			<td>
				<font style="color:white;" size="5.5">
				<?php
					echo "".$rscanrt."/- INR";
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:white;" size="5.5">
					C. Pound Amount Into Indian Rupee Is :  
				</font>
			</th>
			<td>
				<font style="color:white;" size="5.5">
				<?php
					echo "".$rspndrt."/- INR";
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:white;" size="5.5">
					D. Yen Amount Into Indian Rupee Is : 
				</font>
			</th>
			<td>
				<font style="color:white;" size="5.5">
				<?php
					echo "".$rsynrt."/- INR";
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:white;" size="5.5">
					E. Dirham Amount To Indian Rupee Is : 
				</font>
			</th>
			<td>
				<font style="color:white;" size="5.5">
				<?php
					echo "".$rsdrhm."/- INR";
				?>
				</font>
			</td>
		</tr>

	</table> 

	<br><br>
	<font style="color:white;  font-size: 30px;"> 
	<?php
			echo "Thank You For Using This Application..... Have A Good Day.....";
	?>
	</font>

	<br><br>

	<button style="color:yellow; background-color: red; padding:10px 20px; margin:4px 2px; cursor:space; border:groove 10px; font-size: 20px; border-radius:500px;"><a href="currency.php" style="text-decoration: none; color:yellow;">BACK</a></button>

	</center>

<?php
	}
?>

</body>
</html>