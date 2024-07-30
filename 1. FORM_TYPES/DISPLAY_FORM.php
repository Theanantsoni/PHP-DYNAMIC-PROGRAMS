<?php
	if(isset($_POST['btnsubmit']))
	{
		$fname=$_POST['txtfname'];
		$mname=$_POST['txtmname'];
		$lname=$_POST['txtlname'];
		$address=$_POST['txtadd'];
		$email=$_POST['txtemail'];
		$pwd=$_POST['txtpwd'];
		$conpwd=$_POST['txtconpwd'];
		$mob1=$_POST['txtmob1'];
		$mob2=$_POST['txtmob2'];
		$curadd=$_POST['txtcuradd'];
		$gender=$_POST['rdogen'];
		$title=$_POST['drptitle'];
		$Country=$_POST['drpcountry'];
		$State=$_POST['drpstate'];
		$City=$_POST['drpcity'];
		$Area=$_POST['txtarea'];
		$meritalstatus=$_POST['rdomerit'];
		$bod=$_POST['txtbod'];
		$pincode=$_POST['txtpin'];
		$cast=$_POST['rdocast'];
		$Nationality=$_POST['rdonation'];
		$School=$_POST['txtscl'];
		$Collage=$_POST['txtclg'];
		$University=$_POST['txtuni'];
		$card=$_POST['rdocrdhldr'];
		$comlang=$_POST['rdocomlang'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body bgcolor="#00fff1">
	<center>
		<h1 style="color:darkblue"> Registration Form</h1>
		<table border="10" bordercolor="red" width="50%">
			
			<tr>
				<th>
					<font>
						Your First name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $fname;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Middle name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $mname;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Middle name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $lname;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Address Is : 
					</font>
				</th>
				<td>
					<?php
						echo $address;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Email ID Is : 
					</font>
				</th>
				<td>
					<?php
						echo $email;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Password Is : 
					</font>
				</th>
				<td>
					<?php
						echo $pwd;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Confirm Password Is : 
					</font>
				</th>
				<td>
					<?php
						echo $conpwd;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Mobile number 1 Is : 
					</font>
				</th>
				<td>
					<?php
						echo $mob1;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Mobile number 2 Is : 
					</font>
				</th>
				<td>
					<?php
						echo $mob2;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Current Address Is : 
					</font>
				</th>
				<td>
					<?php
						echo $curadd;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Gender Is : 
					</font>
				</th>
				<td>
					<?php
						echo $gender;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Title Is : 
					</font>
				</th>
				<td>
					<?php
						echo $title;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Country Is : 
					</font>
				</th>
				<td>
					<?php
						echo $Country;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your State Is : 
					</font>
				</th>
				<td>
					<?php
						echo $State;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your City Is : 
					</font>
				</th>
				<td>
					<?php
						echo $City;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Area Is : 
					</font>
				</th>
				<td>
					<?php
						echo $Area;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Marital Status Is : 
					</font>
				</th>
				<td>
					<?php
						echo $meritalstatus;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Birth Of Date Is : 
					</font>
				</th>
				<td>
					<?php
						echo $bod;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Pin code No Is : 
					</font>
				</th>
				<td>
					<?php
						echo $pincode;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Cast Category Is : 
					</font>
				</th>
				<td>
					<?php
						echo $cast;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Hobbies Are : 
					</font>
				</th>
				<td>
					<?php
						foreach ($_POST['chkhobbies'] as $hobbies)
						{
							echo $hobbies. ",";
						}
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Nationality Is : 
					</font>
				</th>
				<td>
					<?php
						echo $Nationality;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your School Name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $School;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Collage Name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $Collage;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your University Name Is : 
					</font>
				</th>
				<td>
					<?php
						echo $University;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Degree Is : 
					</font>
				</th>
				<td>
					<?php
						foreach($_POST['chkdegree'] as $degree)
						{
							echo $degree. ",";
						}
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Available Documents Are : 
					</font>
				</th>
				<td>
					<?php
						foreach($_POST['chkdoc'] as $doc)
						{
							echo $doc. ",";
						}
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Card Holder Are : 
					</font>
				</th>
				<td>
					<?php
						echo $card;
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Known Languages Are : 
					</font>
				</th>
				<td>
					<?php
						foreach($_POST['txtlangkwn'] as $knwnlang)
						{
							echo $knwnlang. ",";
						}
					?>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Your Basic Computer Knowledge Are : 
					</font>
				</th>
				<td>
					<?php
						echo $comlang;
					?>
				</td>
			</tr>

		</table>
	</center>
</body>
</html>