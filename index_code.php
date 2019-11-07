<?php

session_start();
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
        
        //test stuff
        $test = "SELECT stumatric, firstname, secondName FROM sc_students WHERE stuMatric = '151025741'";
        $result = mysqli_query($connection, $test);
        $numberOfRows = mysqli_affected_rows($connection);
        
        print('Number of rows returned is: ' . $numberOfRows);
        
        mysqli_close($connection);

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
  	$sql = "SELECT * FROM users WHERE email_address='$emailAdd' AND password='$pwd'";
        $result = mysqli_query($connection, $sql);

  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['email'] = $emailAdd;
  	  header('location: home.php');
  	}else {
  		$_SESSION["error"] = $error;
                header("location: index.php");
        }
  }
}

?>