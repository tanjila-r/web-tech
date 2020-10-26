<!DOCTYPE html>
<html>
    <body>

        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
        <fieldset>
            <legend style="font-family: fantasy;">BLOOD GROUP</legend>
            <select id="bg" name="bg" >
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="0+">0+</option>
        <option value="0-">0-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select><br>
            <hr>
            <input type="submit" name="Submit">
        </fieldset>

        <?php

        echo $bg;
        echo "<br>"; 

        ?>

    </body>
</html>