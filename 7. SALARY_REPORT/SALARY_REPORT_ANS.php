<?php
	//echo "hello";

	if(isset($_POST['btnsubmit']))
	{
		$sal=$_POST['txtsal'];
		$hra=$_POST['txthra'];
		$da=$_POST['txtnda'];
		$tra=$_POST['txtntra'];
		$bonus=$_POST['txtnbon'];
		$ins=$_POST['txtins'];
		$pf=$_POST['txtpf'];
	}

	$count_hra = $sal*$hra/100;
	//echo $count_hra;

	$count_da = $sal*$da/100;
	//echo $count_da;

	$tot_sal=$sal+$count_hra+$count_da+$tra+$bonus;

	$net_sal=$tot_sal-$ins-$pf;

?>

<body bgcolor="skyblue";>
<center>
	<h1 style="color:red";>SALARY REPORT</h1>
<table border="5" border="5" width="50%" bordercolor="black">
	

	<tr>
		<th>
			<font>
				You Enter Your Salary Is :
			</font>
		</th>

		<td>
			<?php
				echo $sal;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter HRA Is (in %) :
			</font>
		</th>

		<td>
			<?php
				echo $hra;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter DA Is (in %) :
			</font>
		</th>

		<td>
			<?php
				echo $da;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter travelling Amount Is :
			</font>
		</th>

		<td>
			<?php
				echo $tra;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter bonus Amount Is :
			</font>
		</th>

		<td>
			<?php
				echo $bonus;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter Insuarance Amount Is :
			</font>
		</th>

		<td>
			<?php
				echo $ins;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				You Enter P_F Amount Is :
			</font>
		</th>

		<td>
			<?php
				echo $pf;
			?>
		</td>

	</tr>

</table><br><br>

<!------------------------------------------------------------------------------------------->
<table border="5" border="5" width="50%" bordercolor="black">
	
	<tr>
		<th>
			<font>
				HRA Is :
			</font>
		</th>

		<td>
			<?php
				echo $count_hra;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				DA Is :
			</font>
		</th>

		<td>
			<?php
				echo $count_da;
			?>
		</td>

	</tr>

	<tr>

	<th>
			<font>
				Total Salary Is :
			</font>
		</th>

		<td>
			<?php
				echo $tot_sal;
			?>
		</td>

	</tr>

	<tr>

		<th>
			<font>
				NET Salary Is :
			</font>
		</th>

		<td>
			<?php
				echo $net_sal;
			?>
		</td>

	</tr>

</table>
</center>
</body>