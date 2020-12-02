<?php
include './../model.php';
session_start();
if (isset($_POST['username'])) {
	if (isset($_POST['password'])) {
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];

	  if (checkLogin($data)) {
	  	 echo 'Successfully login!!';
	     $_SESSION['username']=$data['username'];
	     //echo $_SESSION['username'];
	  	 header('Location: ./../dashboard.php');
	  }
	  else{
	  	 header('Location: ./../login.php');
	  }
	}
}