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
<body bgcolor="skyblue" style="color:black;font-size:25px;Border-style:solid;Border-width:10px;Border-color:red;Background-color:skyblue;font-size:40px;">

	<h3 style="color:black; text-align:center; font-size: 50px;">Sponsership Letter</h3>

	<h2 style="color:black; text-align: right"><?php echo $date; ?></h2>
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
		echo "<font style='color:black;Font-family:Georgia;font-size:40px;'>";
		echo "Dear Sir";
		echo "</font>";
	?>

	<p style="color:black;Font-family:Georgia;Text-indent:15%;font-size:35px;">
		Starting on October 1 at 7:00 PM my local time, I will join people across Canada, and in Angola, in a 24-hour Drumathon to raise funds in support of The Dondi Project.  The project, initiated by the United Church of Canada's Men's Ministries Network, will support the rebuilding of essential education in Angola through the reconstruction of the Lutamo school at Dondi.  Funding of $1 million has been committed to IECA, our partners in Angola. 
		<br><br>
		Our Dondi Drumathon will involve over 100 communities and 2,000 drummers and raise $500,000 for The Dondi Project. It promises to be a groundbreaking event along many dimensions.  
		The Dondi Drumathon Description explains what will happen on October 1-2, 2010. We've learned that there's even a chance we might break a world record for the largest and longest continuous community rhythm and drumming event.  
		<br><br>
		Starting on October 1 at 7:00 PM my local time, I will join people across Canada, and in Angola, in a 24-hour Drumathon to raise funds in support of The Dondi Project.  The project, initiated by the United Church of Canada's Men's Ministries Network, will support the rebuilding of essential education in Angola through the reconstruction of the Lutamo school at Dondi.  Funding of $1 million has been committed to IECA, our partners in Angola. 
		<br><br>
		Our Dondi Drumathon will involve over 100 communities and 2,000 drummers and raise $500,000 for The Dondi Project. It promises to be a groundbreaking event along many dimensions.  
		The Dondi Drumathon Description explains what will happen on October 1-2, 2010. We've learned that there's even a chance we might break a world record for the largest and longest continuous community rhythm and drumming event.  
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