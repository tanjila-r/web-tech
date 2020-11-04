<!DOCTYPE html>
<html>
    <style>
        body
        {
            background: lightgray;
        }
        form
        {
            width: 50%;
            margin: auto;
            padding: 50px;
        }
        .login label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
        input[type="text"]
        {
            overflow: hidden;
            font-size: 15px;
            padding: 5px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="password"]
        {
            overflow: hidden;
            font-size: 15px;
            padding: 5px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="submit"]
        {
            width: 100px ;
            background: none;
            border: 2px solid grey;
            padding: 5px;cursor: pointer;
        }
        .button:hover 
        {
            border: 2px solid black ;
        }
        a
        {
            text-decoration: none;
            color: black;
            padding: 0 5%;
        }
        .link:hover
        {
            color: red;
        }
    </style>

    <body>
    <?php include('head.php');?>
    <form id="login" method="post" action="profile.php">>
            <fieldset style="border: black 2px solid;">
                <legend><b>LOG IN</b></legend>

                <div class="login">
                    <label for="uname"><b>User Name</b></label>
                    : <input type="text" id="uname" name="uname" size="55px" placeholder="name*" required><br>

                    <label for="password"><b>Password</b></label>
                    : <input type="password" id="password" name="password" size="55px" placeholder="password*" required>
                    <hr>

                    <input type="checkbox" name="rememberme" value="rememberme">
                    <span class="checkamrk">
                    <label class="rememberme">Remember me
                    </span>
                </div><br>
                <input class="button "type="submit" value="Submit" name="submit">
                <a href="ForgetPassword.php" class="link">Forget Password?</a>
            </fieldset>
        </form>
    <?php include('Footer.php');?>
    </body>
</html>