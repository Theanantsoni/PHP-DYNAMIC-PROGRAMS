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
<body bgcolor="black">

	<center>

	<h1 style="color:red; padding-top: 20px; font-size:50px; padding-bottom:20px; border:solid 10px; border-color: darkblue; margin:5px 10px;">------------------------Welcome To Indian Money Converter App------------------------</h1> <br><br><br><br>
	<table border="5" bordercolor="yellow" width="50%">
	<tr>
		<th>
			<font style="color:#1f00ff;" size="6.5">
				A. Today's Rate Of US Dollar Is : 
			</font>
		</th>

		<td>
			<font style="color:#c722ff;" size="6.5">
				<?php
					echo $usrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:#1f00ff;" size="6.5">
				B. Today's Rate Of Canadian Dollar Is :  
			</font>
		</th>

		<td>
			<font style="color:#c722ff;" size="6.5">
				<?php
					echo $canrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:#1f00ff;" size="6.5">
				C. Today's Rate Of Pound Is :   
			</font>
		</th>

		<td>
			<font style="color:#c722ff;" size="6.5">
				<?php
					echo $pndrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:#1f00ff;" size="6.5">
				D. Today's Rate Of Yen Is :   
			</font>
		</th>

		<td>
			<font style="color:#c722ff;" size="6.5">
				<?php
					echo $ynrt;
				?>
			</font>
		</td>
	</tr>

	<tr>
		<th>
			<font style="color:#1f00ff;" size="6.5">
				E. Today's Rate Of Dirham Is : 
			</font>
		</th>

		<td>
			<font style="color:#c722ff;" size="6.5">
				<?php
					echo $drhm;
				?>
			</font>
		</td>
	</tr>

	</table>

	<br><br>
		<font size="25" style="color:red;">
		<?php
			echo "You Enter RS. ".$rsrt." That You Want To Convert Into All Five Currencies : ";
		?>
		</font>
	<br><br>

	<table border="5" bordercolor="yellow" width="50%">
		
		<tr>
			<th>
				<font style="color:#c722ff;" size="6.5">
					A. RS To US Dollar Amount Is : 
				</font>
			</th>
			<td>
				<font style="color:#1f00ff;" size="6.5">
				<?php
					echo $rsusrt;
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:#c722ff;" size="6.5">
					B. RS To Canadian Dollar Amount Is : 
				</font>
			</th>
			<td>
				<font style="color:#1f00ff;" size="6.5">
				<?php
					echo $rscanrt;
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:#c722ff;" size="6.5">
					C. RS To Pound Amount Is :  
				</font>
			</th>
			<td>
				<font style="color:#1f00ff;" size="6.5">
				<?php
					echo $rspndrt;
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:#c722ff;" size="6.5">
					D. RS To Yen Amount Is : 
				</font>
			</th>
			<td>
				<font style="color:#1f00ff;" size="6.5">
				<?php
					echo $rsynrt;
				?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font style="color:#c722ff;" size="6.5">
					E. RS To Dirham Amount Is : 
				</font>
			</th>
			<td>
				<font style="color:#1f00ff;" size="6.5">
				<?php
					echo $rsdrhm;
				?>
				</font>
			</td>
		</tr>

	</table> 

	<br><br>
	<font size="25" style="color:red"> 
	<?php
			echo "Thank You For Using This Application.....<br> Have A Good Day.....";
	?>
	</font>

	<br><br>

	<button style="color:yellow; background-color: red; padding:10px 20px; margin:4px 2px; cursor:space; border:groove 20px; font-size: 30px; border-radius:500px;"><a href="currency1.php" style="text-decoration: none; color:yellow;">BACK</a></button>

	</center>

<?php
	}
?>

</body>
</html>