<?php
session_start();
if (empty($_SESSION['username'])) {
	header('Location: login.php');
}
require_once './controller/userInfo.php';
$data=fetchUser($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile|View</title>
	<style type="text/css">
		fieldset {
		  background-color: #eeeeee;
		  width: 50%;
		}

		legend {
		  background-color: gray;
		  color: white;
		  padding: 7px 18px;
		}
	</style>
</head>
<body style="padding-top: 150px;">
	<center>
		<!-- <br><br><br><br><br> -->
		<table width="60%" border="1" style="background-color: #eeee; height: 400px; text-align: center;">
			<tr>
				<td width="750%"><a href="dashboard.php" style="text-decoration: none; color: #1900e6;">Dashboard</a></td>
				<td rowspan="5">
					<form action="./controller/updateUser.php" method="POST">
						<h3>Change Password</h3>
						<p><b>Current Password</b> &nbsp;&nbsp;<input type="Password" name="currpass" value=""></p>
						<p><b>New Password</b> &nbsp;&nbsp;<input type="Password" name="newpass" value=""></p>
						<p><input type="submit" name="ChangePass" value="Change Password"></p>
					</form>
				</td>
			</tr>
			<tr>
				<td><a href="viewProfile.php" style="text-decoration: none; color: #1900e6;">View Profile</a></td>
			</tr>
			<tr>
				<td><a href="./editProfile.php" style="text-decoration: none;color: #1900e6;">Edit Profile</a></td>
			</tr>
			<tr>
				<td><a href=# style="text-decoration: none;color: #1900e6;">Change Password</a></td>
			</tr>
			<tr>
				<td><a href="./logout.php" style="text-decoration: none;color: #1900e6;">Logout</a></td>
			</tr>
		</table>
	</center>
</body>
</html>