<?php
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

// LOGIN USER
//Satisfied T01 overall

if (isset ($_POST['submit'])) {
    $emailadd = $_POST['email'];
    $passwd = $_POST['password'];
    $pwd = md5($passwd); //Satisfies T05 in test case scenario
    $error = "Email or Password is incorrect. Please try again";
}

if (empty($_POST['email']) && empty($_POST['password'])) {
    
    echo '<script> alert("Both fields are required") </script>';
} else {
    if ($emailadd.length > 30 or $passwd.length < 8) {
    echo '<script> alert("Length of fields is invalid") </script>';
    } //Satisfies T02
    
if (!empty($emailadd) && !empty($passwd)) {
    $sql = "SELECT * FROM sc_users WHERE emailAddress='$emailadd' AND password='$pwd'";
    $result = mysqli_query($connection, $sql); //Satisfies T05
    
    if (mysqli_num_rows($result) == 1) {
       header ("Location: landing_page.php");
    }
}
            
}


?>