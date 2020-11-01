<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">CHANGE PASSWORD</legend>

    <div class="pp">

    <label>Current Password : </label>
    <input type="text" id="currpword" name="currpword" ><br><br>

    <label style="color: green;">New Password : </label>
    <input type="text" id="npword" name="npword" ><br><br>

    <label style="color: red;">Retype New Password : </label>
    <input type="text" id="Rnpword" name="Rnpword" ><br>

    </div>

    <style>
        .pp label
        {
            width: 170px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>


    <hr><br>

    <input type="submit" name="submit" id="submit" value="Submit">

</fieldset>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if(isset($_POST['submit']))
        {
            $currpword = $_POST['currpword'];
            $npword = $_POST['npword'];
            $Rnpword  = $_POST['Rnpword'];
            if($currpword == $npword)
            {
                echo "Please use a New Password!";
            }
            if($Rnpword != $npword)
            {
                echo "Your New Password doesn't match!";
            }
            else
            {
                echo "Your Password has been changed!";
            }
        }
    }   
?>

</body>

</html>