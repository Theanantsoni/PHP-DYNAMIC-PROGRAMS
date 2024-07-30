<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CheckBo</title>

  <script>
      function form()
    {
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
        
    }
  </script>

</head>
<body>
  <center>
    <form action="" method="POST" onsubmit="return form()">

    Hobbies : -

    <input type="checkbox" name="chkhobbies[]" id="uhob" value="Reading" >Reading &nbsp&nbsp
    <input type="checkbox" name="chkhobbies[]" id="uhob" value="Writing novels" >Writing &nbsp&nbsp
    <input type="checkbox" name="chkhobbies[]" id="uhob" value="playing cricket" >playing cricket &nbsp&nbsp&nbsp&nbsp&nbsp <br>
    <input type="checkbox" name="chkhobbies[]" id="uhob" value="Coding" >Coding &nbsp&nbsp&nbsp&nbsp
    <input type="checkbox" name="chkhobbies[]" id="uhob" value="Learning Languages" >Learning Languages

    <br>

    <span style="color:red; " id="userhobbiy"></span>

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