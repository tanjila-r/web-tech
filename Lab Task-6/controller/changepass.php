<?php  
require_once '../model.php';
session_start();
if (empty($_SESSION['username'])) {
  header('Location: login.php');
}
if (isset($_POST['edit'])) {
	$data['curpass'] = $_POST['curpass'];
	$data['newpass'] = $_POST['newpass'];
	$data['username'] = $_SESSION['username'];
	

  if (checkLogin($data)) {
  	if (updatePass($_SESSION['username'], $data)) {
      # code...
      echo 'Successfully updated!!';
    //redirect to showStudent
    }
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