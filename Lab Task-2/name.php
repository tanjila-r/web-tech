<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
            <?php

            $nameErr = "";
            $name = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if (empty($_POST["name"])) {
                $nameErr = "Name is required";
                } 
                else
                {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters allowed";
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
            <legend style="font-family: fantasy;">NAME</legend>
            <input type="text" name="name">
            <br>
            <hr>
            <input type="submit" name="Submit"><br>
        </fieldset>

        <?php

        echo $name;
        echo "<br>"; 
        ?>

       


    </body>
</html>
