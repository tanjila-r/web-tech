<!DOCTYPE html>
<html>
    <head><meta name="viewpoint" cxontent="width=device-eidth, initial-scale=1.0"></head>
    <style>
    body
    {
        margin: 0;
        padding: 0;
    }
    .sidebar
    {
        position: fixed;
        width: 250px;
        height: 150%;
        background: #1e1e1e;
        
    }
    .sidebar header
    {
        color: white;
        font-size: 35px;
        line-height: 60px;
        text-align: center;
        background: #1e1e1e;
        font-family: sans-serif;
        text-transform: uppercase;
        font-weight: bold;
    }
    .sidebar a
    {
        text-decoration: none;
        display: block;
        color: white;
        height: 50px;
        width: 100%;
        line-height: 50px;
        padding-left: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        border-top: 1px solid black;
        border-left: 5px solid transparent;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    a:hover
    {
        border-left: 5px solid #b93632;
        color: #b93632;
    }
    </style>
    <body>
        
        <div class = "sidebar">
            <header>Dashboard</header>
            <a href="dashboard.php"><span>Dashboard</span></a>
            <a href="viewprofile.php"><span>View Profile</span></a>
            <a href="editprofile.php"><span>Edit Profile</span></a>
            <a href="changepropicture.php"><span>Change Profile Picture</span></a>
            <a href="changepass.php"><span>Change Password</span></a>
            <a href="login.php"><span>Logout</span></a>
        </div>
    
    </body>
</html>