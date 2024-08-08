<?php
	if(isset($_POST['btnsubmit']))
	{
		$cur=$_POST['rdocur'];
		
		if($cur=="US Dollar")
		{
?>
		<body bgcolor="#ddd8fd">
			<center>
			<form action="" method="POST">
				<h2 style="color: blue; font-size: 40px;">Enter The Amount That You Want To Convert US Dollar Into Indian Rupees  :  </h2>
				<input type="text" name="txtrs" size="20" placeholder="Enter Amount" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<h2 style="color: blue; font-size: 40px;">Enter The Today's Rate Of US Dollar : </h2>
				<input type="text" name="txtus" size="30" placeholder="Enter US Dollar" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<br><br>

				<input type="submit" name="btnsubmit1" value="SUBMIT" style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px; ">

				<button style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;"><a href="currency2.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</form>

		</center>	
<?php
		}

		if($cur=="Canadian Dollar")
		{
?>
		<body bgcolor="#ddd8fd">
			<center>
			<form action="" method="POST">
				<h2 style="color: blue; font-size: 40px;">Enter The Amount That You Want To Convert Canadian Dollar Into Indian Rupees  :  </h2>
				<input type="text" name="txtrs" size="30" placeholder="Enter Amount" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<h2 style="color: blue; font-size: 40px;">Enter The Today's Rate Of Canadian Dollar : </h2>
				<input type="text" name="txtcan" size="30" placeholder="Enter US Dollar" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<br><br>

				<input type="submit" name="btnsubmit2" value="SUBMIT" style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px; ">

				<button style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;"><a href="currency2.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</form>
		</center>
<?php			
		}
		if($cur=="pound")
		{
?>		
		<body bgcolor="#ddd8fd">
			<center>
			<form action="" method="POST">
				<h2 style="color: blue; font-size: 40px;">Enter The Amount That You Want To Convert Pound Into Indian Rupees  :  </h2>
				<input type="text" name="txtrs" size="30" placeholder="Enter Amount" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<h2 style="color: blue; font-size: 40px;">Enter The Today's Rate Of Pound : </h2>
				<input type="text" name="txtpnd" size="30" placeholder="Enter Pound" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<br><br>

				<input type="submit" name="btnsubmit3" value="SUBMIT" style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px; ">

				<button style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;"><a href="currency2.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</form>
		</center>
<?php
		}
		if($cur=="yen")
		{
?>
		<body bgcolor="#ddd8fd">
			<center>
			<form action="" method="POST">
				<h2 style="color: blue; font-size: 40px;">Enter The Amount That You Want To Convert Yen Into Indian Rupees  :  </h2>
				<input type="text" name="txtrs" size="30" placeholder="Enter Amount" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<h2 style="color: blue; font-size: 40px;">Enter The Today's Rate Of Yen : </h2>
				<input type="text" name="txtyen" size="30" placeholder="Enter Yen" style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<br><br>

				<input type="submit" name="btnsubmit4" value="SUBMIT" style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px; ">

				<button style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;"><a href="currency2.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</form>
	</center>

<?php
		}
		if($cur=="dirham")
		{
?>
		<body bgcolor="#ddd8fd">
			<center>
			<form action="" method="POST">
				<h2 style="color: blue; font-size: 40px;">Enter The Amount That You Want To Convert Dirham Into Indian Rupees  :  </h2>
				<input type="text" name="txtrs" size="30" placeholder="Enter Amount"style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<h2 style="color: blue; font-size: 40px;">Enter The Today's Rate Of Dirham : </h2>
				<input type="text" name="txtdrhm" size="30" placeholder="Enter Dirham"style="border:double 10px; color:red; border-radius:100px; font-size: 50px;">

				<br><br>

				<input type="submit" name="btnsubmit5" value="SUBMIT" style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px; ">

				<button style="color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;"><a href="currency2.php" style="text-decoration: none; color:#00f5ed;">BACK</a></button>
			</form>
		</center>
<?php
		}
	}
?>





<?php/*---------------------------------------------------------------------------------------*/?>





<?php
	if(isset($_POST['btnsubmit1']))
	{
		$indrs=$_POST['txtrs'];
		$uscur=$_POST['txtus'];
		$totcur=$indrs*$uscur;

		echo "<body style='background-color: #ecd5d5;'>";
		echo "<center>";
		echo "<h2  style='color:red; padding-top:25px; padding-bottom:25px;font-size:35px;'>";
		echo "------------------------Welcome To Indian Money Converter App------------------------";
		echo "</h2>";

		echo "<h3  style='color:blue; padding-bottom:25px; font-size:35px;'>";
		echo "-------------------You Select 1. Convert RS To US Dollar-------------------";
		echo "</h3>";

		echo "<h4 style='color:darkblue; font-size: 40px; padding-bottom:10px;'>";
		echo "You Enter Amount Is : " .$indrs;
		echo "</h4>";

		echo "<h4 style='color:purple; font-size: 40px; padding-bottom:10px;'>";
		echo "Converted : ".$indrs. " US Dollar = " . $totcur. "/- Indian Rupees";
		echo "</h4>";

		echo "<h1 style='color:red; font-size: 50px; padding-bottom:10px;'>";
		echo "Thank You For Using This Application.....<br> Have A Good Day...";
		echo "</h1>";
		
		echo "<button style='color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;'>";
		echo "<a href='currency2.php' style='text-decoration: none; color:#00f5ed;'>";
		echo "HOME";
		echo "</a>";
		echo "</button>";

		echo "</center>";
		echo "</body>";
	}

	if(isset($_POST['btnsubmit2']))
	{
		$indrs=$_POST['txtrs'];
		$cancur=$_POST['txtcan'];
		$totcur=$indrs*$cancur;

		echo "<body style='background-color: #ecd5d5;'>";	
		echo "<center>";
		echo "<h2 style='color:red; padding-top:25px; padding-bottom:25px;font-size:35px;'>";
		echo "------------------------Welcome To Indian Money Converter App------------------------";
		echo "</h2>";

		echo "<h3 style='color:blue; padding-bottom:25px; font-size:35px;'>";
		echo "------------------------You Select 2. Convert RS To Canadian Dollar------------------------";
		echo "</h3>";

		echo "<h4 style='color:darkblue; font-size: 40px; padding-bottom:10px;'>";
		echo "You Enter Amount Is : " .$indrs;
		echo "</h4>";

		echo "<h4 style='color:purple; font-size: 40px; padding-bottom:10px;'>";
		echo "Converted : ".$indrs. " Canadian Dollar = " . $totcur. " /- Indian Rupees";
		echo "</h4>";

		echo "<h1 style='color: red; font-size: 50px; padding-bottom:10px;'>";
		echo "Thank You For Using This Application.....<br> Have A Good Day...";
		echo "</h1>";

		echo "<button style='color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;'>";
		echo "<a href='currency2.php' style='text-decoration: none; color:#00f5ed;'>";
		echo "HOME";
		echo "</a>";
		echo "</button>";

		echo "</center>";
		echo "</body>";
	}

	if(isset($_POST['btnsubmit3']))
	{
		$indrs=$_POST['txtrs'];
		$pnd=$_POST['txtpnd'];
		$totcur=$indrs*$pnd;

		echo "<body style='background-color: #ecd5d5;'>";	
		echo "<center>";
		echo "<h2 style='color:red; padding-top:25px; padding-bottom:25px;font-size:35px;'>";
		echo "------------------------Welcome To Indian Money Converter App------------------------";
		echo "</h2>";

		echo "<h3 style='color:blue; padding-bottom:25px; font-size:35px;'>";
		echo "------------------------You Select 3. Convert RS To Pound------------------------";
		echo "</h3>";

		echo "<h4 style='color:darkblue; font-size: 40px; padding-bottom:10px;'>";
		echo "You Enter Amount Is : " .$indrs;
		echo "</h4>";

		echo "<h4 style='color:purple; font-size: 40px; padding-bottom:10px;'>";
		echo "Converted : ".$indrs. " Pound. = " . $totcur. " /- Indian Rupees";
		echo "</h4>";

		echo "<h1 style='color:red; font-size: 50px; padding-bottom:10px;'>";
		echo "Thank You For Using This Application.....<br> Have A Good Day...";
		echo "</h1>";

		echo "<button style='color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;'>";
		echo "<a href='currency2.php' style='text-decoration: none; color:#00f5ed;'>";
		echo "HOME";
		echo "</a>";
		echo "</button>";

		echo "</center>";
		echo "</body>";
	}

	if(isset($_POST['btnsubmit4']))
	{
		$indrs=$_POST['txtrs'];
		$yen=$_POST['txtyen'];
		$totcur=$indrs*$yen;

		echo "<body style='background-color: #ecd5d5;'>";	
		echo "<center>";
		echo "<h2 style='color:red; padding-top:25px; padding-bottom:25px;font-size:35px;'>";
		echo "------------------------Welcome To Indian Money Converter App------------------------";
		echo "</h2>";

		echo "<h3 style='color:blue; padding-bottom:25px; font-size:35px;'>";
		echo "------------------------You Select 4. Convert RS To Yen------------------------";
		echo "</h3>";

		echo "<h4 style='color:darkblue; font-size: 40px; padding-bottom:10px;'>";
		echo "You Enter Amount Is : " .$indrs;
		echo "</h4>";

		echo "<h4 style='color:purple; font-size: 40px; padding-bottom:10px;'>";
		echo "Converted : ".$indrs. " Yen. = " . $totcur. " /- Indian Rupees";
		echo "</h4>";

		echo "<h1 style='color:red; font-size: 50px; padding-bottom:10px;'>";
		echo "Thank You For Using This Application.....<br> Have A Good Day...";
		echo "</h1>";

		echo "<button style='color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;'>";
		echo "<a href='currency2.php' style='text-decoration: none; color:#00f5ed;'>";
		echo "HOME";
		echo "</a>";
		echo "</button>";

		echo "</center>";
		echo "</body>";
	}

	if(isset($_POST['btnsubmit5']))
	{
		$indrs=$_POST['txtrs'];
		$drhm=$_POST['txtdrhm'];
		$totcur=$indrs*$drhm;

		echo "<body style='background-color: #ecd5d5;'>";	
		echo "<center>";
		echo "<h2 style='color:red; padding-top:25px; padding-bottom:25px;font-size:35px;'>";
		echo "------------------------Welcome To Indian Money Converter App------------------------";
		echo "</h2>";

		echo "<h3 style='color:blue; padding-bottom:25px; font-size:35px;'>";
		echo "------------------------You Select 5. Convert RS To Dirham------------------------";
		echo "</h3>";

		echo "<h4 style='color:darkblue; font-size: 40px; padding-bottom:10px;'>";
		echo "You Enter Amount Is : " .$indrs;
		echo "</h4>";

		echo "<h4 style='color:purple; font-size: 40px; padding-bottom:10px;'>";
		echo "Converted : ".$indrs. " Dirham. = " . $totcur. " /- Indian Rupees";
		echo "</h4>";

		echo "<h1 style='color:red; font-size: 50px; padding-bottom:10px;'>";
		echo "Thank You For Using This Application.....<br> Have A Good Day...";
		echo "</h1>";

		echo "<button style='color:#00ff1e; background-color: #002b6b; padding:10px 20px; margin:4px 2px; cursor:space; border:solid 15px; font-size: 30px; border-radius:50px;'>";
		echo "<a href='currency2.php' style='text-decoration: none; color:#00f5ed;'>";
		echo "HOME";
		echo "</a>";
		echo "</button>";

		echo "</center>";
		echo "</body>";
	}
?>