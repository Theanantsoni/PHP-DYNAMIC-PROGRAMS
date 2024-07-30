<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TextareaBox</title>
    <script>
        function form()
        {
            var address = document.getElementById("uadd").value;

            if(address == "")
            {
                document.getElementById("useraddress").innerHTML="*Enter Your Address*";
                return false;
            }
        }
    </script>
</head>
<body>
    <center>
        <form action="" method="POST" onsubmit="return form()">
        
        Enter Address : 

        <textarea cols="30" rows="5" name="txtadd" id="uadd"></textarea>

        <br>

        <span id="useraddress"></span>

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