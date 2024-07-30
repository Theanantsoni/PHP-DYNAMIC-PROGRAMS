<!DOCTYPE html>
<html>
	<head>
		<title>TextBox</title>
	<script>
			function form()
			{
				var fname = document.getElementById("ufname").value;
				var pattern = /^[a-zA-Z]*$|^\d*$/;

				if(fname == "")
				{
					document.getElementById("ufirstname").innerHTML="*Enter Name Is Empty*";
					return false;
				}
				if(!isNaN(fname))
				{
					document.getElementById("ufirstname").innerHTML="*Number is Not Allowed";
					return false;
				}
				if (!pattern.test(fname)) 
            	{
                document.getElementById("ufirstname").innerHTML="characters Are Not Allowed*";
                return false;
            	}
				else
				{
					document.getElementById("ufirstname").innerHTML="";
				}

				//Contact javascript ...

				var contact = document.getElementById("ucontact").value;
				
	            if(contact == "")
            	{
                	document.getElementById("usercontact").innerHTML="*Enter Contact Number*";
                	return false;
            	}
	            if(contact.length>10 || contact.length <10)
	            {
	            	document.getElementById("usercontact").innerHTML="*Enter Mobile Number must be 10 Digits*";
	            	return false;
	            }
            	if (!/^\d{10}$/.test(contact)) 
            	{
                	document.getElementById("usercontact").innerHTML="characters Are Not Allowed*";
                	return false;
            	}
            	else
            	{
               		document.getElementById("usercontact").innerHTML="";
            	}

	            //Email javascript ...

	            var email = document.getElementById("uemail").value;
	      		var emailPattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

	        	// Check if the email matches the pattern
	        	if (emailPattern.test(email))   //if (email.match(emailPattern))
	        	{
	        	    document.getElementById("useremail").innerHTML="";
	        	} 
	        	else 
	        	{
	        	    document.getElementById("useremail").innerHTML="*Invalid email address. Please enter a valid email.*";
	        	    return false; 
	        	}

		      	//Address javascript ...

		      	var address = document.getElementById("uadd").value;

	            if(address == "")
	            {
	                document.getElementById("useraddress").innerHTML="*Enter Your Address*";
	                return false;
	            }

	            //State javascript ...

	            var stateselect = document.getElementById("ustate").value;

				if(stateselect == "select")
				{
					document.getElementById("userstate").innerHTML="*Please Select State*";
	                return false;
				}

				//Gender javascript ...

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

	            //Hobbies javascript ...

	            var form_data = new FormData(document.querySelector("form"));
		        
			    if(!form_data.has("chkhobbies[]"))
			    {
			        document.getElementById("userhobbiy").innerHTML = "*Please Enter Atleast One Hobby*";
			        return false;
			    }
			    else
			    {
			        document.getElementById("userhobbiy").innerHTML = "";
			    }

			    //Password javascript ...

			    var password = document.getElementById("upwd").value;
				var confirmpassword = document.getElementById("uconpwd").value;

				if(password == "")
				{
					document.getElementById("userpwd").innerHTML="*Password Is Empty*";
					return false;
				}

				if (password.length < 5 || password.length > 20)
				{
					document.getElementById("userpwd").innerHTML="*Password Length Must Be Between 5 And 20*";
					return false;
				}

				if(confirmpassword == "")
				{
					document.getElementById("userconpwd").innerHTML="*Confirm Password Is Empty*";
					return false;
				}

				if (confirmpassword.length < 5 || confirmpassword.length > 20)
				{
					document.getElementById("userconpwd").innerHTML="*Password Length Must Be Between 5 And 20*";
					return false;
				}

				if(password != confirmpassword)
				{
					document.getElementById("userconpwd").innerHTML="*Password And Confirm Password Is Not Same*";
					return false;
				}

	    
			}

		</script>

	</head>
	<body>
		<center>
			<form action="" method="POST" onsubmit="return form()">
			

			<br><br>

			First Name : 

			<input type="text" name="txtfname" placeholder="Enter First Name" id="ufname">

			<br>

			<span id="ufirstname" style="color:red"></span>

			
			<br><br>
			
			Contact No : 

			<input type="text" name="txtlab" value="+91" readonly size="1">
			<input type="text" name="txtmob1" id="ucontact" size="30" placeholder="Enter Your First Mobile Number">
				
			<br>

			<span id="usercontact" style="color:red"></span>

			<br><br>

			Email ID : 

	    	<input type="text" name="txtemail" placeholder="Enter Your Email" id="uemail">
	    	<span id="useremail" style="color:red"></span>

	    	<br><br>

	    	Enter Address : 

	        <textarea cols="30" rows="5" name="txtadd" id="uadd"></textarea>

	        <br>

	        <span id="useraddress" style="color:red"></span>

	        <br><br>

	        Select State : 

			<select id="ustate">
				<option value="select">Select</option>
				<option value="Ahemdabad">Ahemdabad</option>
				<option value="vadodara">vadodara</option>
				<option value="Rajkot">Rajkot</option>
				<option value="Baroda">Baroda</option>
				<option value="Navsari">Navsari</option>
				<option value="Gandhinagar">Gandhinagar</option>
				<option value="Surat">Surat</option>
				<option value="Somnath">Somnath</option>
				<option value="Kutch">Kutch</option>
				<option value="Palanpur">Palanpur</option>
			</select>

			<br>

			<span id="userstate" style="color:red"></span>

			<br><br>

			Gender :  

			<input type="radio" name="gender" value="male" id="maleRadio">Male
	       
	        <input type="radio" name="gender" value="female" id="femaleRadio">Female

	        <br>
	    	
	    	<span id="result" style="color:red"></span>

	        <br><br>

	        Hobbies : -

	    	<input type="checkbox" name="chkhobbies[]" id="uhob" value="Reading" >Reading &nbsp&nbsp
	    	<input type="checkbox" name="chkhobbies[]" id="uhob" value="Writing novels" >Writing &nbsp&nbsp
	    	<input type="checkbox" name="chkhobbies[]" id="uhob" value="playing cricket" >playing cricket &nbsp&nbsp&nbsp&nbsp&nbsp <br>
	    	<input type="checkbox" name="chkhobbies[]" id="uhob" value="Coding" >Coding &nbsp&nbsp&nbsp&nbsp
	    	<input type="checkbox" name="chkhobbies[]" id="uhob" value="Learning Languages" >Learning Languages

	    	<br>

	   	 	<span style="color:red;" id="userhobbiy"></span>

	    	<br><br>

	    	Password : 
			
			<input type="password" name="txtpwd" id="upwd" placeholder="Enter Password">

			<span id="userpwd" style="color:red">	</span>

			<br><br>

			Confirm Password : 

			<input type="password" name="txtconpwd" id= "uconpwd" placeholder="Enter Confirm Password">

			<span id="userconpwd" style="color:red"></span>

			<br><br>

			<input type="submit" name="btnsubmit" value="Submit"  size="30" style="Font-size:30px; Border-radius:100px; background-color:#feff0f;">
			
			</form>

		</center>
	</body>
</html>


<?php
	if(isset($_POST['btnsubmit']))
	{
		echo "Submit Button Clicked...!!";

		echo "<br>";

		echo "Your Form Has Been Submited Successfully";
	}
?>