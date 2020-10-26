<!DOCTYPE html>
<html>
    <body>
        <?php

        $emailErr = "";
        $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {

        if (empty($_POST["email"])) 
        {
         $emailErr = "Email is required";
        }

        else
        {
        $email = test_input($_POST["email"]);
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
        <fieldset>
            <legend style="font-family: fantasy;">EMAIL</legend>
            <input type="text" name="email">
            <b>i</b>
            <hr>
            <input type="submit" name="Submit">
        </fieldset>

        <?php

        echo $email;
        echo "<br>";

        ?>

    </body>
</html>