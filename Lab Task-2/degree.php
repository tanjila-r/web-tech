<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>

             <?php

            $degreeErr = "";
            $degree = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {

            if(empty($_POST["degree"])) 
            
            {
             $degreeErr = "degree is required";
            }

            else

            {
            $degree = test_input($_POST["degree"]);
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
            <legend style="font-family: fantasy;">DEGREE</legend>

            <input type="checkbox" name="degree" value="SSC">Male
            <input type="checkbox" name="degree" value="female">HSC
            <input type="checkbox" name="degree" value="other">BSc
            <input type="checkbox" name="degree" value="other">MSc


            <br>
            <hr>
            <input type="submit" name="Submit"><br>
        </fieldset>

        <?php

        echo $degree;
        echo "<br>";

        ?>

    </body>
</html>
