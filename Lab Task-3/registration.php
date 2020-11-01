<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">Registration</legend>

    <div class="pp1">

    <label>Name : </label>
    <input type="text" id="name" name="name" ><br><br>
    <hr><br>

    <label>Email : </label>
    <input type="text" id="email" name="email" ><br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" id="uname" name="uname" ><br><br>
    <hr><br>

    <label>Password : </label>
    <input type="text" id="pword" name="pword" ><br><br>
    <hr><br>

    <label>Confirm Password : </label>
    <input type="text" id="conpword" name="conpword" ><br><br>
    <hr><br>

    </div>

    <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">Gender</legend>

    <div class="pp2">

    <input type="radio" name="gender" value="Male">
    <label class="male">Male</label>

    <input type="radio" name="gender" value="Female">
    <label class="female">Female</label>

    <input type="radio" name="gender" value="Other">
    <label class="other">Other</label>

    </fieldset>

    <hr>

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

</div>

<div class="pp3">

<fieldset>

<legend style="font-family: Arial, Helvetica, sans-serif;">Date Of Birth</legend>

<div class="pp2">

<input type="text" id="date" name="date" size="5"> /
<input type="text" id="month" name="month" size="5"> /
<input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>


</fieldset>

<br>

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

    <input type="submit" name="submit" id="submit" value="Submit">
    
    <input type="reset" name="reset" id="reset" value="Reset"
</fieldset>
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
     if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $uname = $_POST['uname'];
           $pword = $_POST['pword'];
           $conpword = $_POST['conpword'];
           $gender = $_POST['gender'];
           $date = $_POST['date'];
           $month = $_POST['month'];
           $year = $_POST['year'];
           
           if(empty($name))
           {
               echo "Name is empty ";
           
           }
           if(empty($uname))
           {
               echo "User Name is empty ";
           
           }
           if($pword != $conpword)
           {
               echo "Your password doesn't match ";
           
           }
           if(empty($date))
           {
               echo "Date is empty! ";
           
           }
           if(empty($month))
           {
               echo "Month is empty! ";
           
           }
           if(empty($year))
           {
               echo "Year is empty! ";
           
           }
           else 
           {
               echo "Name: $name, User Name : $uname, You are : $gender, Your DOB is: $date/$month/$year";
           }
       }
   }
?>

</body>

</html>