<?php
	
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

    //temporarily set post value until selection page is complete
    //$_POST["value"] = '155827896';
    //The correct value is now being passed from view_average_mark.php
    $_POST["value"];
	
?>

<!DOCTYPE html>
<html>


<head>
    <title>
        Student Coursework Management - Return Average Mark
    </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>

</head>
    <body>
        <?php
            //get number of submissions details for selected student
            $sql = "SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title
            FROM sc_submissions s LEFT OUTER JOIN sc_coursework c
            ON s.courseworkId = c.courseworkId
            WHERE stuMatric = '" . $_POST["value"] . "'
            ORDER BY s.submittedDate ";
            $result = mysqli_query($connection, $sql);
            $numberOfRows = mysqli_affected_rows($connection);

            //get total marks for all submissions and create average mark
            $sql = "SELECT SUM(mark) as total_mark FROM sc_submissions WHERE stuMatric = '" . $_POST["value"] . "'";
            $sumResult = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($sumResult);
            $total = $row["total_mark"];
            $avMark = round($total/$numberOfRows);

            //get student name
            $sql = "SELECT firstName, secondName FROM sc_students WHERE stuMatric = '" . $_POST["value"] . "'";
            $nameResult = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($nameResult);
            $fullName = $row["firstName"] . " " . $row["secondName"];

            //below used to check correct number of rows and total mark sum is returned correctly
            //echo "<p> variable rertuned: number of rows = " . $numberOfRows . " and total marks = " . $total . "</p>";

            //average mark for student
            echo '<h1>The average mark for ' . $fullName . ' (' . $_POST["value"] . ') ' . ' is ' . $avMark . '%</h1>';
            
        ?>
        <h2>Breakdown of marks:</h2>
        <table id="allMarks">
            <tr>
                <th>Coursework</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Mitigating Requested</th>
                <th>Mitigating Upheld</th>
                <th>Second Submission</th>
            </tr>
            <?php

            //populate table with data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["title"] .  "</td>";
                echo "<td>" . $row["mark"] .  "</td>";
                echo "<td>" . $row["submittedDate"] .  "</td>";
                echo "<td>" . $row["mitigatingReq"] .  "</td>";
                echo "<td>" . $row["mitigatingUph"] .  "</td>";
                echo "<td>" . $row["secondSub"] .  "</td></tr>";
            }

            //free memory
            mysqli_free_result($result);

            //close connection
            mysqli_close($connection);

            ?>
        </table>
    </body>
</html> 