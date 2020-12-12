<?php
session_start();
if(isset($_SESSION['apply'])){
	if($_SESSION['apply'] == "success"){
?>
<script>alert("You have sent request successfully")</script>
<?php
unset($_SESSION['apply']);
	}
	else if($_SESSION['apply'] == "duplicate"){
?>
<script>alert("You have already sent a request")</script>
<?php
unset($_SESSION['apply']);
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
<body>

    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>

    <nav>     
    
        <ul>
            <li><a  href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a class="active" href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    
    </nav>
	
	<?php
	include 'control/connection.php';
		$q = "SELECT * FROM `post` ORDER BY `id` DESC";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
			if($_SESSION['status'] == $res['status']){
				continue;
			}
			else{
	?>

	<form  action="#" method="POST" class="newsfeed-form">
	     <table>
            <tr>
				<?php
					if($res['status']==1){
				?>
				<th	align="left" style="margin: 10px;font-size:150%"><label for="">Student</label>					
                </th>
				<?php
					}
					else if($res['status']==2){
				?>
					<th					
                    align="left" style="margin: 10px;font-size:150%"><label for="">Teacher</label>					
                </th>
				<?php
					}
				?>
            </tr>
            <tr>
			</table>
			</br>
			<table>
			<tr>
			<th align="left"> Name </th>
			<th align="left">: &nbsp; &nbsp</th>
			<th align="left"><?php echo $res['name'] ?></th>
			</tr>
			<tr>
			<th align="left"> Subject </th>
			<th align="left">: &nbsp; &nbsp</th>
			<th align="left"><?php echo $res['subject'] ?></th>
			</tr>
			 <tr>
			<th align="left"> Class 
					
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"> <?php echo $res['class'] ?> </th>
			</tr>
			<tr>
			<th align="left"> Medium 
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['medium'] ?></th>
			</tr>
			<tr>
			<th align="left"> Salary 
				
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['lowSal'] ." To ". $res['highSal']; ?></th>
			</tr>
			<tr>
			<th align="left"> Location 		
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['location'] ?></th>
			</tr>
			<tr>
			<th align="left"> Preferred Institution &nbsp;			
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['institution'] ?></th>
			</tr>
				<tr>
			<th align="left"> Deadline 			
				</th>
				<th align="left">: &nbsp; &nbsp;</th>
				<th align="left"><?php echo $res['deadline'] ?></th>
			</tr>
			</table>
			</br>
			<table>
	
			 <tr>
                <th align="left"><button > <a style="color:white;" href="control/apply.php?id=<?php echo $res['id']; ?>" > Apply Now </a> </button></th>
            </tr>
			
		</table>
	</form>
		

	<?php
			}
		}
	?>

</body>
</html>