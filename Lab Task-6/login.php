<?php
include 'control/loginCheck.php';
if(isset($_SESSION['email'])){
    if($_SESSION['status']==0){
        header("location: dashboard.php");
    }
    else{
        header("location: newsfeed.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="outer">
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>
    
    <nav>        
        <ul>
            <li><a href="index.php"><img align="center" src="image/home.png"></a></li>            
        </ul>

        <ul class="r">
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    
    </nav>

    <form action="#" onsubmit="return validation()" method="POST" class="inner" >
        <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Login</label></h1>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="text" name="txtEmail" id="txtEmail" placeholder="Email"><br>
                    <span id="userMail"></span>            
                </th>
            </tr>
            <tr>
                <th>
                    <input type="password" name="txtPassword" id="txtPassword" placeholder="Password"><br>
                    <span id="userPass"></span>
                </th>
            </tr>
            <tr>
                <th align="right"><button type="submit" name="submit">Login</button></th>
            </tr>
            <tr>
                <th align="center">
                    <span >
                        <?php
                            if(isset($error)){
                                echo $error;
                            }
                        ?>
                    </span>
                </th>
            </tr>
        </table>
        <table style="margin-top: 20px">
            <tr>
                <td>
                    <label for="">Forgot your passoword?</label> <a href="#">Click Here</a>
                </td>                
            </tr>
            <tr>
                <td>
                    <label for="">Don't have an account?</label> <a href="registration.php">Click Here</a>
                </td>
            </tr>
        </table>
    </form>
    
    <script type="text/javascript" src="js/login.js"> </script>
</body>
</html>