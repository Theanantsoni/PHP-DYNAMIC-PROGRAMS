<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email</title>
  <script>

    function form()
    {
      var email = document.getElementById("uemail").value;
      var emailPattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

        // Check if the email matches the pattern
          if(email == "")
          {
            document.getElementById("useremail").innerHTML="*Please Enter Your Email Address*";
            return false;
          }
          if (emailPattern.test(email))   //if (email.match(emailPattern))
          {
              document.getElementById("useremail").innerHTML="";
          } 
          else 
          {
              document.getElementById("useremail").innerHTML="*Invalid email address. Please enter a valid email.*";
              return false; 
          }
    }

  </script>
</head>
<body>
  <center>
    <form action="" method="POST" onsubmit="return form()">
        
    Email ID : 

    <input type="text" name="txtemail" placeholder="Enter Your Email" id="uemail">
    <span id="useremail"></span>

    <br><br>

    <input type="submit" name="btnsubmit" value="Submit" size="30" style="Font-size:30px; Border-radius:100px; background-color:#feff0f;">
    
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