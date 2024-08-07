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

	<h3 style="color:black; text-align: center; font-size: 50px;">Bussiness Letter</h3>

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
		echo "Dear Sir...";
		echo "</font>";
	?>

	<p style="color:black;Font-family:Georgia;Text-indent:15%;font-size:35px;">
	I am writing you concerning a recent purchase of widgets. Approximately two weeks ago, on October 1, 1 ordered a total of 50 widgets for Company, Inc. via the Widgets Galore client webpage. I received an email notification two days later confirming the receipt of payment and the shipment of the widgets. According to your website, shipments should reach their destination within 3-5 business days of being sent, but I have yet to receive the widgets. Do you have any information on what may have happened to delay the shipment or where the shipment is currently?
	<br><br>
	I have worked with Widgets Galore, Inc. in the past and have the greatest confidence in your products and customer service. We need the shipment of widgets soon, however, and I hoped you might be able to provide me with an idea of when I can expect them. Thank you in advance for any help you might be able to offer.

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