<?php

session_start();
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

// LOGIN USER
if (isset($_POST['submit'])) {
  $emailAdd = $_POST['email'];
  $passwd = $_POST['password'];
  $pwd = md5($passwd);
  $error = "  Email/Password incorrect";
  $_SESSION['email'] = $_POST['email'];


  if (empty($_POST['email']) && empty($_POST['password'])) {
      
      echo '<script> alert("Both fields are required")</script>';
  }

  if (!empty($emailAdd) || !empty($passwd)) {
  	$sql = "SELECT * FROM sc_users WHERE emailAddress='$emailAdd' AND password='$pwd'";
        $result = mysqli_query($connection, $sql);

  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['email'] = $emailAdd;
  	  return("Thanks for signing in!!");
  	}else {
  		$_SESSION["error"] = $error;
                header("location: index.php");
        }
  }
}

?>