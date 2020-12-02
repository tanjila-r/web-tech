<?php
session_start();
$id = $_SESSION['id'];
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
        <?php
            if($_SESSION['status']==0){
        ?>
            <ul>
            <li><a  href="Dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="Dashboard.php">Dashboard</a></li>
             <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
           <li><a class="active" href="profile.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
            
        <?php
            } 
            else{
        ?>
        <ul>
            <li><a  href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a class="active" href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <?php
            }
        ?>
    </nav>
    
    <?php
	include 'control/connection.php';
		$q = "SELECT * FROM `user` WHERE `id` = $id";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
	?>
    <form name="search_form_results"  action="#" method="#" class="timeline">
    <table class="proTable">
        <tr>
            <th><label for="timeline">Timeline</label></th>
        </tr>
        <tr>
            <th><button onclick="profileBtn();" class="active" type="submit" name="btnAccountSet" >Personal Information</button></th>
        </tr>
        <?php
            if($res['status'] == 2){
        ?>
        <tr>
            <th><button onclick="tutioninfoBtn();" type="submit" name="btnTutionInfo">Tution Information</button></th>
        </tr>
        <?php
            }
        ?>
        <tr>
            <th><button onclick="acSetBtn();" type="submit" name="btnAccountSet">Account Settings</button></th>
        </tr>
    </table>
    </form>
    
    <form style="width: 380px" action="control/update.php" method="POST" class="inner" enctype="multipart/form-data">
	<table>
        <tr>
            <th>
                <h1 style="margin-bottom: 10px;"><label for="">User Profile</label></h1>
            </th>
        </tr>
    </table>
    <table>
        <tr>
            <th >
                    <?php
                        if(isset($res['image'])){
                    ?>
                    <img align="center" style="border-radius: 50%;" src="<?php echo $res['image']; ?>" width="150px" height="150px" align="center" id="ProfileDisplay">                 
                    <?php
                        }
                        else{
                    ?>
                    <img align="right" style="border-radius: 50%;" src="placeholder.png" width="150px" height="150px" align="center" id="ProfileDisplay">
                    <?php
                        }
                    ?>
                </th>
        </tr>
    </table>
    <table> 
        <tr>
            <th align="right">
                <input type="file" name="photo" id="">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtName" id="Name" value="<?php echo $res['name']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $res['email']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtPhoneNo" id="phone Number" value="<?php echo $res['contact']; ?>" >
            </th>
        </tr>
        <tr>
            <th align="left">
                <label for="">Gender : &nbsp;</label>
                <?php
                    if($res['gender'] == "male"){
                ?>
                <input type="radio" name="gender" id="" value="male" checked>
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="">Female</label>
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="gender" id="" value="male" >
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="female" checked>
                <label for="">Female</label>
                <?php
                    }
                ?>
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtAddress" id="address" placeholder="Enter your address" value="<?php echo $res['address']; ?>">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" name="txtInstitution" id="institution" placeholder="Enter your institution" value="<?php echo $res['institution']; ?>">
            </th>
        </tr>
        <tr>            
            <th align="center"><button type="submit" name="submit">Update</button></th>
        </tr>
        <tr>
            <th> <span > <?php if(isset($_SESSION['result'])) { echo $_SESSION['result']; } unset($_SESSION['result']); ?></span> </th>
        </tr>
    </>
	</form>
    <?php 
        }
    ?>
            
	<script src="js/script.js"> </script>
</body>
</html>