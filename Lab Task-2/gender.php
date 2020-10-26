<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>

            <?php

            $genderErr = "";
            $gender = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {

            if(empty($_POST["gender"])) 
            
            {
             $genderErr = "gender is required";
            }

            else

            {
            $gender = test_input($_POST["gender"]);
            }

            }

            function test_input($data)
            {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }

            ?>
        <fieldset>
            <legend style="font-family: fantasy;">GENDER</legend>

            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other

            <br>
            <hr>
            <input type="submit" name="Submit"><br>
        </fieldset>

        <?php

        echo $gender;
        echo "<br>";

        ?>


    </body>
</html>