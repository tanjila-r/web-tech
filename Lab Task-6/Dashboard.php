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
            <li><a  href="Dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a class="active" href="Dashboard.php">Dashboard</a></li>
             <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
        </ul>

        <ul class="r">
           <li><a href="profile.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    
	</nav>
	
	<div class="vl"></div>
	
	
	<?php
	include 'control/connection.php';
		$q = "SELECT * FROM `post` ORDER BY `id` DESC";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
	?>
	
	<form  action="#" method="POST" class="newsfeed-form">
	     <table>
		 	<tr>
                <th>
                    <h1 style="margin-bottom: 30px "><label for="">Admin Dashboard</label></h1>
                </th>
            </tr>
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
			 <tr>
                <td><th align="left"><button > <a style="color:white;" href="details.php?id=<?php echo $res['userIdFk']; ?>" > Details </a> </button></th></td>
                <td><th align="left"><button > <a style="color:white;" href="control/delete.php?id=<?php echo $res['id']; ?>" > Delete </a> </button></th></td>
            </tr>
            </tr>
			
			</table>
	</form>

    <?php
		}
	?>
	
	

</body>
</html>