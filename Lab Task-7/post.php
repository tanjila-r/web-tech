<?php
session_start();
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
            <li><a href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a class="active" href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    
    </nav>
	<form  action="control/postData.php" method="POST" class="post-form">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 25px"><label for="">Post For Tution</label></h1>
                </th>
            </tr>
			</table>
		
			<table>
            <tr>
						<td>
						<label for="">Medium :</label>
						
					 <label for=""> <input type="checkbox" name="medium[]" value="Bangla"> Bangla </input></label>
					 <label for=""> <input type="checkbox" name="medium[]" value="English"> English </input></label>
					 <label for=""> <input type="checkbox" name="medium[]" value="Others"> Others </input></label>
					  
					  
					  </td>
            </tr>
			</table>
			</br>
			<table>
		
			<tr>
				<td>
					<label for="">Preferred Subject :</label></br></br>
					
					<label for="">  <input type="checkbox" name="prefSub[]" value="Bangla"> Bangla </input></label>
					<label for="">  <input type="checkbox" name="prefSub[]" value="English"> English </input></label>
					<label for="">  <input type="checkbox" name="prefSub[]" value="Math"> Math </input></label> 
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Physic"> Physic </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="ICT"> ICT </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Chemistry"> Chemistry </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Biology"> Biology </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Religion"> Religion </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="General Science"> General Science </input></label>
					 </br></br>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Economics"> Economics </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Statistics"> Statistics </input></label> 
					 <label for=""> <input type="checkbox" name="prefSub[]" value="Social Science"> Social Science </input></label>
					<label for="">  <input type="checkbox" name="prefSub[]" value="Finance"> Finance </input></label>
					 <label for=""> <input type="checkbox" name="prefSub[]" value="History"> History </input></label>
					  <label for=""><input type="checkbox" name="prefSub[]" value="Accounting"> Accounting </input></label>
					  
					  </td>  
            </tr>
			</table>
			</br>
			<table>
			   <tr>
						<td>
						<label for="">Class:</label>
						   <select name="class">
						  <label for=""><option value="One">One</option></label>
						  <label for=""><option value="Two">Two</option></label>
						  <label for=""><option value="Three">Three</option></label>
						  <label for=""><option value="Four">Four</option></label> 
						  <label for=""><option value="Five">Five</option></label> 
						  <label for=""><option value="six">six</option></label> 
						  <label for=""><option value="Seven">Seven</option></label> 
						  <label for=""><option value="Eight">Eight</option> </label>
						 <label for=""> <option value="Nine">Nine</option> </label>
						  <label for=""><option value="Ten">Ten</option> </label>
						 <label for=""> <option value="Eleven">Eleven</option></label>
						 <label for=""> <option value="Twelve">Twelve</option></label>
						  
						    </select>
 
						<?php echo"&nbsp";?>
						   <label for="">Location:</label>
						  <select name = "location">
						 <label for=""> <option value="Badda">Badda</option></label>
						 <label for=""> <option value="Nikunjo">Nikunjo</option></label>
						 <label for=""> <option value="Basabo">Basabo</option></label>
						 <label for=""> <option value="Gulshan">Gulshan</option></label>
						 <label for=""> <option value="Mohammodpur">Mohammodpur</option></label>
						  <label for=""><option value="Banani">Banani</option></label>
						<label for=""> <option value="khilkhet">khilkhet</option></label>	
							
						  </select>
						  </td>
				</tr>
				</table>
				</br>
			<table>
			
				<tr>
				<td>
				<label for="">Salary Range : </label> 
				<select name="salRangeLow">
					          <label for=""><option value="1000">1000</option></label>
							  <label for=""><option value="2000">2000</option></label>
							 <label for=""> <option value="3000">3000</option></label>
							 
				</select>
				<?php echo"&nbsp"."<label> To </label>"."&nbsp";?>
				<select name="salRangeHigh">
					         <label for=""> <option value="2000">2000</option></label>
							 <label for=""> <option value="3000">3000</option></label>
							 <label for=""> <option value="4000">4000</option></label>
							 <label for=""> <option value="5000">5000</option></label>
							 <label for=""> <option value="6000">6000</option></label>
							 <label for=""> <option value="7000">7000</option></label>
							 
				</select>
				
				</td>
				</tr>
				</table>
				</br>
				<table>
				
				<tr>
				<td><label for="">Preferred Institution:</label>
				<select name="prefIns">
							<label for=""><option value="Buet">Buet</option></label>
					         <label for=""> <option value="Aiub">Aiub</option></label>
							  <label for=""><option value="NSU">NSU</option></label>
							 <label for=""> <option value="IUB">IUB</option></label>
							  <label for=""><option value="DU">DU</option></label>
							  <label for=""><option value="Any">Any</option></label>
							  
							 
				</select>
				</td>
				
				</tr>
				</table>
				</br>
				<table>
				<tr>
				<td>
				<label for="">Preferable Time : </label>
				<input type="time" id="Preferable Time "name="prefTime">
				</td>
				</tr>
				</table>
				</br>
				<table>
				<tr>
				<td>
				<label for="">Deadline : </label>
				<input type="date" id="Deadline "name="deadLine">
				</td>
				</tr>
			</table>
			</br>
			<table>
            <tr>
                <th ><button type="submit" style="transform:translate(500%,-60%)" name="submit" >Post</button></th>
			</tr>
			<tr>
				<th>
					<span> <?php if(isset($_SESSION['result'])) { echo $_SESSION['result']; } unset($_SESSION['result']); ?></span>
				</th>
			</tr>
        </table>

		</form>
	
</body>
</html>