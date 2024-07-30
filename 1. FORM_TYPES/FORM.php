<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body bgcolor="lightgreen">
	<form action="DISPLAY_FORM.php" method="POST">
		<center>
		<h1 style="color:red";>Registration Form</h1>

		<table border="5" bordercolor="red" width="50%">
			
			<tr>
				<th>
					<font color="black" size="15">
						First name :-
					</font>
				</th>
				<td>
					<input type="text" name="txtfname" size="30" placeholder="Enter Your Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Middle name :-
					</font>
				</th>
				<td>
					<input type="text" name="txtmname" size="30" placeholder="Enter Your Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Last name :-
					</font>
				</th>
				<td>
					<input type="text" name="txtlname" size="30" placeholder="Enter Your Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Address :-
					</font>
				</th>
				<td>
					<textarea cols="30" rows="5" name="txtadd" placeholder="Enter Your Address" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;"></textarea>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Email ID :-
					</font>
				</th>
				<td>
					<input type="text" name="txtemail" size="30" placeholder="Enter Your Email ID" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Password :-
					</font>
				</th>
				<td>
					<input type="Password" name="txtpwd" size="30" placeholder="Enter Your Password" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Confirm Password :-
					</font>
				</th>
				<td>
					<input type="Password" name="txtconpwd" size="30" placeholder="Enter Your confirm Password" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Mobile number 1 :-
					</font>
				</th>
				<td>
					<input type="text" name="txtmob1" size="30" placeholder="Enter Your First Mobile Number" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Mobile number 2 :-
					</font>
				</th>
				<td>
					<input type="text" name="txtmob2" size="30" placeholder="Enter Your Second Mobile Number" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Current Address :-
					</font>
				</th>
				<td>
					<textarea cols="30" rows="5" name="txtcuradd" size="30" placeholder="Enter Your Current Address" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;"></textarea>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Gender :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdogen" value="Male">Male
					<input type="radio" name="rdogen" size="15px"value="Female">Female
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Title :-
					</font>
				</th>
				<td>
					<select name="drptitle" style="color:red">
						<option value="Select" style="Font-size:20px">Select</option>
						<option value="Mr." style="Font-size:20px; Border-radius:10px; background-color: yellow;">Mr.</option>
						<option value="Dear" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Dear</option>
						<option value="Miss" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Miss</option>
						<option value="Mrs." style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Mrs.</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Country :-
					</font>
				</th>
				<td>
					<select name="drpcountry" style="color:red">
						<option value="Select" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Select</option>
						<option value="India" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">India</option>
						<option value="Shri-lanka" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Shri-lanka</option>
						<option value="Pakistan" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Pakistan</option>
						<option value="China" style="Font-size:20px; Border-radius:10px; background-color: yellow;">China</option>
						<option value="Bangladesh" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Bangladesh</option>
						<option value="Nepal" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Nepal</option>
						<option value="Bhutan" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Bhutan</option>
						<option value="Afganistan" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Afganistan</option>
						<option value="Russia" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Russia</option>
						<option value="Singapor" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Singapor</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						State :-
					</font>
				</th>
				<td>
					<select name="drpstate" style="color:red">
						<option value="Select"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Select</option>
						<option value="Gujarat"style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Gujarat</option>
						<option value="Rajasthan"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Rajasthan</option>
						<option value="Maharashtra"style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Maharashtra</option>
						<option value="Madhyapradesh"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Madhyapradesh</option>
						<option value="Punjab"style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Punjab</option>
						<option value="Uttar-pradesh"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Uttar-pradesh</option>
						<option value="Tamilnadu"style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Tamilnadu</option>
						<option value="Karnataka"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Karnataka</option>
						<option value="Bihar"style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Bihar</option>
						<option value="Sikkim"style="Font-size:20px; Border-radius:10px; background-color: yellow;">Sikkim</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						City :-
					</font>
				</th>
				<td>
					<select name="drpcity" size="1px" style="color:red">
						<option value="Select" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Select</option>
						<option value="Ahemdabad" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Ahemdabad</option>
						<option value="vadodara"style="Font-size:20px; Border-radius:10px; background-color: yellow;">vadodara</option>
						<option value="Rajkot" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Rajkot</option>
						<option value="Baroda" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Baroda</option>
						<option value="Navsari" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Navsari</option>
						<option value="Gandhinagar" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Gandhinagar</option>
						<option value="Surat" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Surat</option>
						<option value="Somnath" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Somnath</option>
						<option value="Kutch" style="Font-size:20px; Border-radius:10px; background-color: lightgreen;">Kutch</option>
						<option value="Palanpur" style="Font-size:20px; Border-radius:10px; background-color: yellow;">Palanpur</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Area :-
					</font>
				</th>
				<td>
					<textarea cols="30" rows="5" name="txtarea" placeholder="Enter Your Area" style="Font-size:20px; Border-radius:10px; background-color: #04fff67a;"></textarea>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Marital Status :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdomerit" value="Single">Single
					<input type="radio" name="rdomerit" value="Married">Married
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Birth Of Date :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
						<input type="text" name="txtbod" size="30" placeholder="Enter Your Birth Of Date" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Pin code No :-
					</font>
				</th>
				<td>
					<input type="text" name="txtpin" size="30" placeholder="Enter Your Area PIN-CODE Number" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Cast Category :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdocast" value="SC">SC
					<input type="radio" name="rdocast" value="ST">ST
					<input type="radio" name="rdocast" value="SEBC">SEBC
					<input type="radio" name="rdocast" value="OPEN">OPEN
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Hobbies :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
						<input type="checkbox" name="chkhobbies[]" value="Reading" >Reading &nbsp&nbsp
						<input type="checkbox" name="chkhobbies[]" value="Writing novels" >Writing &nbsp&nbsp
						<input type="checkbox" name="chkhobbies[]" value="playing cricket" >playing cricket &nbsp&nbsp&nbsp&nbsp&nbsp <br>
						<input type="checkbox" name="chkhobbies[]" value="Coding" >Coding &nbsp&nbsp&nbsp&nbsp
						<input type="checkbox" name="chkhobbies[]" value="Learning Languages" >Learning Languages
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Nationality :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdonation" value="Indian">Indian
					<input type="radio" name="rdonation" value="NRI (Non-Resident Indian)">NRI (Non-Resident Indian)
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						School Name :-
					</font>
				</th>
				<td>
					<font size="5">
					<input type="text" name="txtscl" size="30" placeholder="Enter Your School Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Collage Name :-
					</font>
				</th>
				<td>
					<font size="5">
					<input type="text" name="txtclg" size="30" placeholder="Enter Your Collage Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						University :-
					</font>
				</th>
				<td>
					<font size="5">
					<input type="text" name="txtuni" size="30" placeholder="Enter Your University Name" style="Font-size:30px; Border-radius:10px; background-color: #04fff67a;">
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Degree :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="checkbox" name="chkdegree[]" value="Graduate">Graduate
					<input type="checkbox" name="chkdegree[]" value="Post Graduate">Post Graduate
					<input type="checkbox" name="chkdegree[]" value="Master">Master
					<input type="checkbox" name="chkdegree[]" value="PHD">PHD
					<input type="checkbox" name="chkdegree[]" value="MPhil">MPhil
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Document Available :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="checkbox" name="chkdoc[]" value="Aadhar card">Aadhar card &nbsp&nbsp
					<input type="checkbox" name="chkdoc[]" value="Pan card">Pan card &nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" name="chkdoc[]" value="Driving License">Driving License <br>
					<input type="checkbox" name="chkdoc[]" value="Light Bill">Light Bill &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" name="chkdoc[]" value="Leaving Certificate">Leaving Certificate <br>
					<input type="checkbox" name="chkdoc[]" value="Election card">Election card
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Card Holder :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdocrdhldr" value="APL">APL
					<input type="radio" name="rdocrdhldr" value="BPL">BPL
				</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Language Known :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
						English : &nbsp
						<input type="checkbox" name="txtlangkwn[]" value="English-Read">Read
						<input type="checkbox" name="txtlangkwn[]" value="English-Write">Write
						<input type="checkbox" name="txtlangkwn" value="English-Speak">Speak <br>
						Hindi : &nbsp&nbsp&nbsp&nbsp
						<input type="checkbox" name="txtlangkwn[]" value="Hindi-Read">Read
						<input type="checkbox" name="txtlangkwn[]" value="Hindi-Write">Write
						<input type="checkbox" name="txtlangkwn[]" value="Hindi-Speak">Speak <br>
						Gujarati :&nbsp
						<input type="checkbox" name="txtlangkwn[]" value="Gujarati-Read">Read
						<input type="checkbox" name="txtlangkwn[]" value="Gujarati-Write">Write
						<input type="checkbox" name="txtlangkwn[]" value="Gujarati-Speak">Speak
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font color="black" size="15">
						Do You Have a Basic Computer Knowledge? :-
					</font>
				</th>
				<td>
					<font size="5" color="lightwhite">
					<input type="radio" name="rdocomlang" value="Yes">Yes
					<input type="radio" name="rdocomlang" value="No">No
				</font>
				</td>
			</tr>

		</table>

		<br><br>

		<input type="submit" name="btnsubmit" value="Submit" size="30" style="Font-size:30px; Border-radius:100px; background-color:#feff0f;">

	</form>
	</center>
</body>
</html>

