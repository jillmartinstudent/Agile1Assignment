<!DOCTYPE html>
<html>
    <head>
    <title>View marks for coursework</title>   
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
    </head>
<body>

  
    
    
    
<?php
    //test php to check 
    //Taken from view coursework user story
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
    
    //hardcoded post variable for coursework selection
    $_POST["value"] = 1;

    $test = "SELECT c.title AS 'coursetitle', m.title AS 'moduletitle', l.title AS 'lectitle', l.firstName as 'lecfirst', l.secondName AS 'lecsecond'
    FROM sc_coursework c
    LEFT OUTER JOIN sc_modules m ON c.moduleId = m.moduleId
    LEFT OUTER JOIN sc_lecturers l ON m.lecturerId = l.lecturerId
    WHERE c.courseworkId = '" . $_POST["value"] . "'";
    $result = mysqli_query($connection, $test);
    $row = mysqli_fetch_assoc($result);
    $cTitle = $row["coursetitle"] ;
    $mTitle = $row["moduletitle"];
    $lec = $row["lectitle"] . " " . $row["lecfirst"] . " " . $row["lecsecond"];
    $numberOfRows = mysqli_affected_rows($connection);       
        
        
        
        
	//some test stuff


   echo "<h2>Coursework: </h2><p>" . $cTitle . "</p>";
   echo "<h2>Module: </h2><p>" . $mTitle . "</p>";
   echo "<h2>Lecturer : </h2><p>" . $lec . "</p>";

  
    //used for testing
    //$numberOfRows = mysqli_affected_rows($connection);
        
    //print('Number of rows returned is: ' . $numberOfRows);


?>
    <table id="Coursework"> 
    <h2>Student marks:</h2>
        <table id="allMarks">
            <tr>
                <th>Student Number</th>
		        <th>Student Name</th>
                <th>Mark</th>
                <th>Date Submitted</th>
            </tr>
            <?php

               //get coursework marks
                $test = "SELECT a.stuMatric AS 'matric', mark, submittedDate, s.firstName AS 'stufirst', s.secondName AS 'stusecond'
                FROM sc_submissions a
                LEFT OUTER JOIN sc_students s ON a.stuMatric = s.stuMatric
                WHERE courseworkId = '" . $_POST["value"] . "'";
                $result = mysqli_query($connection, $test);

            //populate table with data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["matric"] .  "</td>";
                echo "<td>" . $row["stufirst"] . " " . $row["stusecond"] .  "</td>";
                echo "<td>" . $row["mark"] .  "</td>";
                echo "<td>" . $row["submittedDate"] .  "</td></tr>";
            }
            //free memory
            mysqli_free_result($result);

            //close connection
            mysqli_close($connection);

            ?>
        </table>
    </body>
</html>       

