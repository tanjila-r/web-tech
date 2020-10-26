<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
            <?php

            $ddErr = "";
            $dd = "";
            $mmErr = "";
            $mm = "";
            $yyyyErr = "";
            $yyyy = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {

            if(empty($_POST["dd"])) 
            
            {
             $ddErr = "date is required";
            }

            else

            {
            $dd = test_input($_POST["dd"]);
            }

            if(empty($_POST["mm"])) 
            
            {
             $mmErr = "month is required";
            }

            else

            {
            $mm = test_input($_POST["mm"]);
            }

            if(empty($_POST["yyyy"])) 
            
            {
             $yyyyErr = "year is required";
            }

            else

            {
            $yyyy = test_input($_POST["yyyy"]);
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

            <legend style="font-family: fantasy;">DATE OF BIRTH</legend>

            <div class ="dd">
            <label>dd</label><br>
            <input type="text" name="dd">
            /
            </div>

             <style>
            div.dd
            {
                text-align: center;
                float: left;
                margin: 2px;
            }
            </style>

            <div class ="mm">
            <label>mm</label><br>
            <input type="text" name="mm">
            /
            </div>

            <style>
            div.mm
            {
                text-align: center;
                float: left;
                margin: 4px;
            }
            </style>

            <div class ="yyyy">
            <label>yyyy</label><br>
            <input type="text" name="yyyy">
            </div>

            <style>
      
             div.yyyy
            {
                text-align: center;
                float: left;
                margin: 4px;
            }

             </style>  

             <br>
             <br>

            <hr>
            <input type="submit" name="Submit">
        </fieldset>
        
        <?php

        echo $dd;
        echo "<br>";

        echo $mm;
        echo "<br>";

        echo $yyyy;
        echo "<br>";

        ?>
    </body>
</html>