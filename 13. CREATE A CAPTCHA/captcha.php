<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
			function submitUserForm() 
			{
   		 	var response = grecaptcha.getResponse();
    		if(response.length == 0) 
    		{
        	document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Please complete the reCAPTCHA challenge!</span>';
        	return false;
    		}
    		return true;
			}
 
			function verifyCaptcha() 
			{
    		document.getElementById('g-recaptcha-error').innerHTML = '';
			}
</script>
</head>
<body bgcolor="white">
	<center>

	<form action="" method="POST" onsubmit="return submitUserForm();">
		<h1 style="color:blue">Login Your Account</h1>
		<label style="color:red; font-size: 30px; cursor:pointer;">Enter Username : </label>

		<input type="text" name="txtuname" size="30" placeholder="Enter Username" style="background-color: #d4eef6; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"> <br><br>

		<label style="color:red; font-size: 30px; cursor:pointer;">Enter Password : </label>

		<input type="text" name="txtpwd" size="30" placeholder="Enter Password" style="background-color: #d4eef6; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"> <br><br>

	    <div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" style="border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px"></div>

	    <div id="g-recaptcha-error"></div>	<br>
      
      <input type="submit" name="btnsubmit" value="Submit" style="background-color: blue; border: none; color:yellow; padding: 15px 30px; text-decoration: none;margin: 8px 4px; cursor: pointer; Border-radius:100px; Font-size:20px";>

	</form>
	</center>
</body>
</html>

<?php
	
 	 	if(isset($_POST['btnsubmit']))
 	 	{
   			$uname=$_POST['txtuname'];
    		$upwd=$_POST['txtpwd'];

    		if($uname=="Anant" and $upwd==204)
			{
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

</head>

<body>
  <center>
    <form> 
     <h1>You Are Successfully Login Your Account</h1>
    
    </form>
  </center>
</body>
</html>

<?php
			}
			else
			{
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	<center>
				<h1>Your Id & Password Is Wrong...!!</h1>
				<h1>Please Try Again...</h1>
	</center>
</body>
</html>
<?php
			}
		}
?>

