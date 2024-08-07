<?php//------------------------------------No DISCOUNT CODING---------------------------------------?>

<?php
	if(isset($_POST['btnsubmit']))
	{
		$product_price=$_POST['txtpro'];
		
		if($product_price<20000 and $product_price<=40000)
		{
			$dis_first=$product_price*0;
			$pay1=$product_price-$dis_first;

?>

<center>

	<table border="5" width="50%" bordercolor="red";>

		<tr>
			<th>
				<font>
					Your Product Price Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $product_price;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Discount Is : 
				</font>
			</th>

			<td>
				<font>
					0 %
				</font>
			</td>
		</tr>


		<tr>
			<th>
				<font>
					Your Total Discount Amount Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $dis_first;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Have To Pay : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $pay1 ." RS/- Only";
					?>
				</font>
			</td>
		</tr>
	
	</table>

	<h3 style="color: red";>No Discount Found Less Then 20,000/- Rs/-</h3>

</center>

<?php
		}
?>

<?php//------------------------------------FIRST DISCOUNT CODING---------------------------------------?>

<?php
		
		if($product_price>=20000 and $product_price<=40000)
		{
			$dis_first=$product_price*15/100;
			$pay1=$product_price-$dis_first;

?>

<center>

	<table border="5" width="50%" bordercolor="red";>

		<tr>
			<th>
				<font>
					Your Product Price Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $product_price;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Discount Is : 
				</font>
			</th>

			<td>
				<font>
					15 %
				</font>
			</td>
		</tr>


		<tr>
			<th>
				<font>
					Your Total Discount Amount Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $dis_first;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Have To Pay : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $pay1 ." RS/- Only";
					?>
				</font>
			</td>
		</tr>
	
	</table>

	<h3 style="color: red";>Thank You...! Visit Again...</h3>

</center>

<?php
		}
?>


<?php//------------------------------------SECOND DISCOUNT CODING---------------------------------------?>


<?php
		if($product_price>40000 and $product_price<=60000)
		{
			$dis_second=$product_price*30/100;
			$pay2=$product_price-$dis_second;
?>

<center>
	<table border="5" width="50%" bordercolor="red";>

		<tr>
			<th>
				<font>
					Your Product Price Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $product_price;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Discount Is : 
				</font>
			</th>

			<td>
				<font>
					30 %
				</font>
			</td>
		</tr>


		<tr>
			<th>
				<font>
					Your Total Discount Amount Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $dis_second;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Have To Pay : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $pay2 ." RS/- Only";
					?>
				</font>
			</td>
		</tr>
	
	</table>

	<h3 style="color: red";>Thank You...! Visit Again...</h3>

</center>

<?php		
		}
?>


<?php//------------------------------------THIRD DISCOUNT CODING---------------------------------------?>


<?php

		if($product_price>60000 and $product_price<=100000)
		{
			$dis_third=$product_price*45/100;
			$pay3=$product_price-$dis_third;
?>	
	
<center>

	<table border="5" width="50%" bordercolor="red";>

		<tr>
			<th>
				<font>
					Your Product Price Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $product_price;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Discount Is : 
				</font>
			</th>

			<td>
				<font>
					45 %
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Total Discount Amount Is : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $dis_third;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font>
					Your Have To Pay : 
				</font>
			</th>

			<td>
				<font>
					<?php
						echo $pay3 ." RS/- Only";
					?>
				</font>
			</td>
		</tr>
	
	</table>	

	<h3 style="color: red";>Thank You...! Visit Again...</h3>

</center>

<?php	
		}
	}
?>
