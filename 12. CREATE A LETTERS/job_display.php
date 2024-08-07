<?php
	if(isset($_POST['btnsubmit']))
	{
		$name1=$_POST['txtname'];
		$address1=$_POST['txtadd1'];
		$city1=$_POST['drpcity1'];
		$pin1=$_POST['txtpin1'];
		$email=$_POST['txtemail'];
		$date=$_POST['txtdte'];
		$sign=$_POST['txtsign'];
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="skyblue" style="color:black;font-size:25px;Border-style:solid;Border-width:10px;Border-color:red;Background-color:skyblue;">

	<h3 style="color:black; text-align: center; font-size: 50px;">Job Letter</h3>

	<h1 style="color:black; text-align: right"><?php echo $date; ?></h1>
	<?php
		echo "<p style='color:black;Font-family:none;font-size:30px;'>";
		echo $name1;	echo "<br>";
		echo $address1;	echo "<br>";
		echo $city1;	echo "<br>";
		echo $pin1;	echo "<br>";
		echo $email;	echo "<br><br>";
		echo "</p>";
	?>
	<?php
		echo "<font style='color:black;Font-family:Georgia;font-size:50px;'>";
		echo "Dear Sir";
		echo "</font>";
	?>

	<p style="color:black;Font-family:Georgia;Text-indent:15%;font-size:35px;">
		I will be graduating from MIT in June with a bachelor's degree in computer sci- ence and am interested in opportunities at Atria.

		<br><br>
		
		I have worked as an intern with Loral Infrared and Imaging Systems for the past two summers in their software engineering department. While there I developed data stream emulation software for the NASA AIRS weather satellite in Con UNIX and Macintosh platforms. At MIT, I worked in the Earth and Planetary Science Department to create a graphic user interfacing system for viewing data sent back by the Magellan space prote orbiting Venus. This experience would te applicable to the creation of the GUI for the up-coming version of Clearcase revi- sion control tools. While I have taken general course work in computer science, I have taken additional courses in media arts, systems design, algorithms, and artifi- cial intelligence.

		<br><br>
		
		I would welcome the opportunity to meet with you and discuss my qualifications for working at Atria. I believe my training has given me the skills to make a valu- able contribution. I look forward to hearing from you soon.

		<br><br>
		Thanks For Your Time... <br><br>
		<?php
			echo "<font style='color:black;Font-family:Georgia;font-size:30px;'> Signature </font>"; echo "<br>";
			echo "<font style='color:black;Font-family:Script MT;font-size:50px;'> $sign </font>";
		?>
</p>
</body>
</html>

<?php
	}
?>