<?php
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
?>

<!DOCTYPE html>
<html>
    <!-- Taken from user story Login :-Create a main landing page for staff once they have logged in that displays options.  -->  

    <head>
        <title>
            Student Coursework Management portal
        </title>
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <script src="main.js"></script>

    </head>

    <h1>  Student Coursework Management Portal </h1>

    <h2>    Please select a option: </h2>

    <!-- Links to menu options as defined in the product backlog -->

    <header>
        <nav id="main-navigation">



        <ul>
                    <li><a href="register_student.php">* Register Student</a></li>
                    <li><a href="view_student.php">* View Student</a></li>
                    <li><a href="view_average_mark.php">Display Student's Average and Alphanumeric Grade</a></li>
                    <br>
                    <li><a href="create_module.php">* Create Module</a></li>
                    <li><a href="create_coursework.php">* Create Coursework</a></li>
                    <li><a href="edit_coursework.php">* Edit Coursework</a></li>
                    <li><a href="add_marks.php">* Add Marks</a></li>
                    <li><a href="view_coursework.php">View Coursework Results</a></li>
                    <br>
                    <li><a href="">* Add Lecturer</a></li>
                    <br>
                    <li><a href="index.php">Logout</a></li>
        </ul>
		</br>
		<p>* denotes under construction</p>

        </nav>
    </header>
    <div id="main-contents">
        <!--     This is the Landing Page  -->
    </div>


    <footer>

        <h3>    Team 1 Agile Software Engineering </h3>
    </footer>
</body>
</html>