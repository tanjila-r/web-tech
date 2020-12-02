<?php  
require_once '../model.php';
session_start();
if (empty($_SESSION['username'])) {
  header('Location: login.php');
}
if (isset($_POST['edit'])) {
	$data['firstname'] = $_POST['firstname'];
	$data['lastname'] = $_POST['lastname'];
	$data['varsityid'] = $_POST['varsityid'];
	

  if (updateUser($_SESSION['username'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../viewProfile.php');
  }
  /*echo $data['firstname'];
  echo $data['lastname'];
  echo $data['varsityid'];*/
} 
else {
	header('Location: ../login.php');
}


?>