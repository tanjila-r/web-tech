<!DOCTYPE html>
<html>
    <style>

    </style>
    <body>
        <fieldset>
        <legend style="font-family: calibri;">PROFILE PICTURE</legend>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Upload">
            </form>
        
        </fieldset>
        <?php
            if(isset($_POST['submit']))
            {
                $file = $_FILES['file'];
                
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];

                $fileEXT = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileEXT));

                $allowed = array('jpeg','jpeg','png');

                if(in_array($fileActualExt, $allowed))
                {
                    if($fileError === 0)
                    {
                        if($fileSize < 4000)
                        {
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = 'uploads/';
                            move_uploaded_file($fileDestination, $fileNameNew);
                        }
                        else
                        {
                            echo "Your file is too big! Not more than 4MB";
                        }
                    }
                    else
                    {
                        echo "Erro on uploading your file!";    
                    }
                }
                else
                {
                    echo "You cannot upload this type of file!";
                }
            }
        ?>
    </body>
</html>