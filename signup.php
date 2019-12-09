<?php
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');   
?>

<!-- 
TEST LOGIN DETAILS
john@dundee.ac.uk
test12345
-->

<!DOCTYPE html>
<html>
<head>
    <title>
        Student Coursework Management Portal Sign Up
    </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body id="document">
    <h1 id="title"> Student Coursework Management Portal Registration Page</h1>
    <body>

    <div id="newAccount">
        <form action="signup_code.php" method="post">
            <h1> Create an account </h1>
            <p> Please complete the below form in order to create an account</p>
            <hr>

            <label> First Name </label> <br>
            <input id="fname" type="text" name="first" placeholder="First name"> <br> <br>

            <label> Last Name </label> <br>
            <input id="sname" type="text" name="last" placeholder="Last name"> <br> <br>

            <label> Email Address </label> <br>
            <input id="emailadd" for="email" name="emailA" placeholder="default@example.com"> <br> <br>

            <label> Password </label> <br>
            <input type="password" name="passW" placeholder="Password" id="pword"> <br> <br>

            <label> Confirm Password </label> <br>
            <input type="password" name="confP" placeholder="Confirm password" id="cpword" minlength="8"> <br> <br>

            <button type="submit" class="submit" name="submit" onclick="return compForm()"> Submit </button>
        </form>
    </div>

</body>

</html>

