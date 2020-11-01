<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">LOGIN</legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" ><br><br>

    <label>Password : </label>
    <input type="text" id="password" name="password" ><br>
    
    </div>

    <style>
        .pp label
        {
            width: 100px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>

    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" id="submit" value="Submit">
    
    <a href="">forget password?</a>

</fieldset>
</form>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
              $name = $_POST['name'];
              $password = $_POST['password'];
              if (empty($name || $password)) 
              {
                echo "Your User Name or Password is empty";
              } 
                else 
              {
                echo "Your user name is $name and password is $password";
              }
            }
        }
?>

</body>

</html>