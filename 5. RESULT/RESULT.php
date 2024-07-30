<html>
	<head>
		<title>Student Result</title>
	</head>
	<body bgcolor="#efbaa7">
			<center>
			<h1 style="color:red">-----: STUDENT RESULT :-----</h1>
			<form action="" method="POST">
			C Language Mark :
			<input type="text" name="txtc" size="30" placeholder="Enter C language mark" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
			CPP Language Mark :
			<input type="text" name="txtcpp" size="30" placeholder="Enter CPP language mark" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
			JAVA Language Mark :
			<input type="text" name="txtjava" size="30" placeholder="Enter JAVA language mark :" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
			PHP Language Mark :
			<input type="text" name="txtphp" size="30" placeholder="Enter PHP language mark :" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
			PYTHON Language Mark :
			<input type="text" name="txtpython" size="30" placeholder="Enter PYTHON language mark :" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>

			<input type="submit" name="btnsubmit" value="CHECK" style="background-color: #ddff3c; border: none; color:#ff000080; padding: 15px 30px; text-decoration: none;margin: 8px 4px; cursor: pointer; Border-radius:10px; Font-size:20px";>
		</center>
		</form>
	</body>
</html>


<center>

<?php

	if(isset($_POST['btnsubmit']))
	{
		$cmrk=$_POST['txtc'];
		$cppmrk=$_POST['txtcpp'];
		$javamrk=$_POST['txtjava'];
		$phpmrk=$_POST['txtphp'];
		$pythonmrk=$_POST['txtpython'];

		$tot=$cmrk+$cppmrk+$javamrk+$phpmrk+$pythonmrk;
		//echo "Total is : ".$tot;	echo "<br>";

		$per=$tot/5;
		//echo "Percentage is : ".$per;	echo "<br>";
		echo "<h1 style='color:#5c3131'>";
		echo "---------------RESULT---------------";
		echo "</h1>";
		
		if($per>90 && $per<=100)

		{	
			echo "<table width='30%' border='5' bordercolor='red'>";
				echo "<tr>";
					echo "<th>";
						echo "Total is : ";	
					echo "<th>";

					echo "<td>";
						echo $tot;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Percentage is : ";
					echo "<th>";

					echo "<td>";
						echo $per;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "GRADE : ";	
					echo "<th>";

					echo "<td>";
						echo "A+";
					echo "</td>";
				echo "</tr>";
		echo "</table>";

		}
		
		else if($per>75 && $per<=90)
		{
			echo "<table width='30%' border='5' bordercolor='red'>";
				echo "<tr>";
					echo "<th>";
						echo "Total is : ";	
					echo "<th>";

					echo "<td>";
						echo $tot;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Percentage is : ";
					echo "<th>";

					echo "<td>";
						echo $per;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "GRADE : ";	
					echo "<th>";

					echo "<td>";
						echo "A";
					echo "</td>";
				echo "</tr>";
		echo "</table>";
			
		}
		else if($per>60 && $per<=75)
		{
			echo "<table width='30%' border='5' bordercolor='red'>";
				echo "<tr>";
					echo "<th>";
						echo "Total is : ";	
					echo "<th>";

					echo "<td>";
						echo $tot;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Percentage is : ";
					echo "<th>";

					echo "<td>";
						echo $per;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "GRADE : ";	
					echo "<th>";

					echo "<td>";
						echo "B";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
			
		}
		else if($per>45 && $per<=60)
		{
			echo "<table width='30%' border='5' bordercolor='red'>";
				echo "<tr>";
					echo "<th>";
						echo "Total is : ";	
					echo "<th>";

					echo "<td>";
						echo $tot;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Percentage is : ";
					echo "<th>";

					echo "<td>";
						echo $per;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "GRADE : ";	
					echo "<th>";

					echo "<td>";
						echo "C";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
			
		}
		else
		{
			echo "<table width='30%' border='5' bordercolor='red'>";
				echo "<tr>";
					echo "<th>";
						echo "Total is : ";	
					echo "<th>";

					echo "<td>";
						echo $tot;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Percentage is : ";
					echo "<th>";

					echo "<td>";
						echo $per;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "GRADE : ";	
					echo "<th>";

					echo "<td>";
						echo "FAIL";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		}
	}
?>
</center>

