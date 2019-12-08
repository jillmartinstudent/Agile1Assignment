<?php
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
	//SITE ADDRESS: https://zeno.computing.dundee.ac.uk/2018-ga/gregjennings/AgileAssignment/Agile1Assignment/
?>

<!DOCTYPE html>
<html>


<head>
    <title>
        Student Coursework Management portal
    </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>

</head>

<body id="document">
    <h1 id="title"> Student Coursework Management Portal </h1>
    <div class="loginbox">
        <h1> Login </h1>
        <form method="post" name="form1" id="form1">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" placeholder="default@example.com" maxlength="30" class="form-control">

            <label for="password">Password</label>
            <input id="password" type="password" name="password" placeholder="Password" minlength="8" class="form-control"><br>

            <?php /*
            if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
            } else {
                $_SESSION["error"] = false;
            }
             */?> <br>
            

            <br> <input type="submit" value="Login" name="submit" onclick="return IsEmpty()" /><br>
             
        </form>
        <input type="button" value="Sign up" name="Sign up" onclick="return signUp()"></input><br>
        <a href='#forget' onclick="return forgotPword()"> Forgotten your password? </a>

    </div>
</body>

</html>
