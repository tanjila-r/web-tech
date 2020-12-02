
<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0px;
            font-family: Calibri;
            font-weight: 400;
        }
        div.a
        {
            width: 80%;
            margin: 0 auto;
            
        }
        header
        {
            background: #fff;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }
        header::after
        {
            content: '';
            display: table;
            clear:both;
        }
        .logo
        {
            float: left;
            padding: 10px 0;
        }
        nav
        {
            float: right;
        }
        nav ul
        {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        nav li
        {
            display: inline-block;
            margin-left: 50px;
            padding-top: 20px;
            position: relative;
        }
        nav a
        {
            color: #444;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
        }
        nav a:hover
        {
            color: #000;
        }
        nav a::before
        {
            content: '';
            display: block;
            height: 5px;
            width: 100%;
            background-color: #444;

            position: absolute;
            top: 20%;
            width: 0%;
            
            transition: all ease-in-out 200ms;
        }
        nav a:hover::before
        {
            width: 100%;
        }
    </style>
    <bodY>
        <header>
        <div class ="a">
            <nav>
                <ul>
                <?php 
                    session_start();
                    echo "Welcome Back, ", $_SESSION['user'];
                ?>
                    <li><a href="home.php">LOG OUT</a></li>
                </ul>
            </nav>
            </div>
        </header>
    </bodY>

</html>