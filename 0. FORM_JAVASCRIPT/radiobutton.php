<html>
<head>
    <title>Gender Validation</title>

        <script>
            function checkGender() 
            {
                // Get the value of the selected gender
                var selectedGender = document.querySelector('input[name="gender"]:checked');

                // Check if a gender is selected and display the result
                if (selectedGender) 
                {
                    document.getElementById("result").innerHTML = "";
                } 
                else 
                {
                    document.getElementById("result").innerHTML = "*Please select a gender*";
                    return false;
                }
            }
    </script>

</head>
<body>
	<center>
    <form method="POST" onsubmit="return checkGender()">

    	Gender :  

    	<br>
    	
    	<span id="result"></span>

        <br><br>

        <input type="radio" name="gender" value="male" id="maleRadio">Male
       
        <input type="radio" name="gender" value="female" id="femaleRadio">Female
        
        <br><br>

        <input type="submit" name="btnsubmit" value="submit">

    </form>
	</center>
</body>
</html>


<?php
	if(isset($_POST['btnsubmit']))
	{
		echo "Button Clicked Successfully";
	}
?>