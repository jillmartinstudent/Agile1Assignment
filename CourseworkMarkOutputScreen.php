

   $conn = mysql_connect($sc_students, $sc_submissions, $sc_coursework, $sc_modules, $sc_lecturers);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
<?php
    //test php to check 
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
			
	//some test stuff
	$test = "SELECT a.stuMatric AS 'matric', mark, submittedDate, c.title AS 'coursetitle', m.title AS 'moduletitle', s.firstName AS 'stufirst', s.secondName AS 'stusecond', l.title AS 'lectitle', l.firstName as 'lecfirst', l.secondName AS 'lecsecond'
	FROM sc_submissions a
	LEFT OUTER JOIN sc_coursework c ON a.courseworkId = c.courseworkId
	LEFT OUTER JOIN sc_modules m ON c.moduleId = m.moduleId
	LEFT OUTER JOIN sc_students s ON a.stuMatric = s.stuMatric
	LEFT OUTER JOIN sc_lecturers l ON m.lecturerId = l.lecturerId
	WHERE a.courseworkId = 1";
    $result = mysqli_query($connection, $test);
	$numberOfRows = mysqli_affected_rows($connection);
	
	print('Number of rows returned is: ' . $numberOfRows);
?>
	<h2>SQL Output:</h2>
        <table id="allMarks">
            <tr>
                <th>Student Number</th>
				<th>Student Name</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Coursework</th>
                <th>Module</th>
                <th>Lecturer</th>
            </tr>
            <?php

            //populate table with data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["matric"] .  "</td>";
                echo "<td>" . $row["stufirst"] . " " . $row["stusecond"] .  "</td>";
                echo "<td>" . $row["mark"] .  "</td>";
                echo "<td>" . $row["submittedDate"] .  "</td>";
                echo "<td>" . $row["coursetitle"] .  "</td>";
				echo "<td>" . $row["moduletitle"] .  "</td>";
				echo "<td>" . $row["lectitle"] . " " . $row["lecfirst"] . " " . $row["lecsecond"] .  "</td></tr>";
            }

