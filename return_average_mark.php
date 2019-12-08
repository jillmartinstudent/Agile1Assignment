<?php
	
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Coursework Management - Student's Marks</title>
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <script src="main.js"></script>
    </head>
    <body>
        <?php
            //get student name
            $sql = "SELECT firstName, secondName FROM sc_students WHERE stuMatric = '" . $_POST["value"] . "'";
            $nameResult = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($nameResult);
            $fullName = $row["firstName"] . " " . $row["secondName"];

            echo "<h1>Displaying marks for " . $fullName . " (" . $_POST["value"] . ") " . "</h1>";
            
        ?>
        <h2>Breakdown of marks for year 1:</h2>
        <table id="1Marks">
            <tr>
                <th>Module</th>
                <th>Coursework</th>
                <th>Coursework Item</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Mitigating Requested</th>
                <th>Mitigating Upheld</th>
                <th>Second Submission</th>
            </tr>
            <?php
                //get marks for year 1 submissions
                $sql ="SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title AS 'itemtitle', w.title AS 'cwtitle', m.title AS 'moduletitle'
                FROM sc_submissions s 
                LEFT OUTER JOIN sc_courseworkItem c ON s.courseworkItemId = c.courseworkItemId
                LEFT OUTER JOIN sc_coursework w ON c.courseworkId = w.courseworkId
                LEFT OUTER JOIN sc_modules m ON w.moduleId = m.moduleId
                LEFT OUTER JOIN sc_modulestocourses t ON m.moduleId = t.moduleId
                WHERE stuMatric = '" . $_POST["value"] . "' AND t.yr = '1'
                GROUP BY s.submissionId
                ORDER BY m.title, w.title";
                $yr1marks = mysqli_query($connection, $sql);;

                //populate table with data
                while ($row = mysqli_fetch_assoc($yr1marks)) {
                    echo "<tr><td>" . $row["moduletitle"] .  "</td>";
                    echo "<td>" . $row["cwtitle"] .  "</td>";
                    echo "<td>" . $row["itemtitle"] .  "</td>";
                    echo "<td>" . $row["mark"] .  "</td>";
                    echo "<td>" . $row["submittedDate"] .  "</td>";
                    echo "<td>" . $row["mitigatingReq"] .  "</td>";
                    echo "<td>" . $row["mitigatingUph"] .  "</td>";
                    echo "<td>" . $row["secondSub"] .  "</td></tr>";
                }
            ?>
        </table>
        </br>
        <h2>Breakdown of marks for year 2:</h2>
        <table id="2Marks">
            <tr>
                <th>Module</th>
                <th>Coursework</th>
                <th>Coursework Item</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Mitigating Requested</th>
                <th>Mitigating Upheld</th>
                <th>Second Submission</th>
            </tr>
            <?php
                //get marks for year 2 submissions
                $sql ="SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title AS 'itemtitle', w.title AS 'cwtitle', m.title AS 'moduletitle'
                FROM sc_submissions s 
                LEFT OUTER JOIN sc_courseworkItem c ON s.courseworkItemId = c.courseworkItemId
                LEFT OUTER JOIN sc_coursework w ON c.courseworkId = w.courseworkId
                LEFT OUTER JOIN sc_modules m ON w.moduleId = m.moduleId
                LEFT OUTER JOIN sc_modulestocourses t ON m.moduleId = t.moduleId
                WHERE stuMatric = '" . $_POST["value"] . "' AND t.yr = '2'
                GROUP BY s.submissionId
                ORDER BY m.title, w.title";
                $yr1marks = mysqli_query($connection, $sql);;

                //populate table with data
                while ($row = mysqli_fetch_assoc($yr1marks)) {
                    echo "<tr><td>" . $row["moduletitle"] .  "</td>";
                    echo "<td>" . $row["cwtitle"] .  "</td>";
                    echo "<td>" . $row["itemtitle"] .  "</td>";
                    echo "<td>" . $row["mark"] .  "</td>";
                    echo "<td>" . $row["submittedDate"] .  "</td>";
                    echo "<td>" . $row["mitigatingReq"] .  "</td>";
                    echo "<td>" . $row["mitigatingUph"] .  "</td>";
                    echo "<td>" . $row["secondSub"] .  "</td></tr>";
                }
            ?>
        </table>
        </br>
        <h2>Breakdown of marks for year 3:</h2>
        <table id="3Marks">
            <tr>
                <th>Module</th>
                <th>Coursework</th>
                <th>Coursework Item</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Mitigating Requested</th>
                <th>Mitigating Upheld</th>
                <th>Second Submission</th>
            </tr>
            <?php
                //get marks for year 3 submissions
                $sql ="SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title AS 'itemtitle', w.title AS 'cwtitle', m.title AS 'moduletitle'
                FROM sc_submissions s 
                LEFT OUTER JOIN sc_courseworkItem c ON s.courseworkItemId = c.courseworkItemId
                LEFT OUTER JOIN sc_coursework w ON c.courseworkId = w.courseworkId
                LEFT OUTER JOIN sc_modules m ON w.moduleId = m.moduleId
                LEFT OUTER JOIN sc_modulestocourses t ON m.moduleId = t.moduleId
                WHERE stuMatric = '" . $_POST["value"] . "' AND t.yr = '3'
                GROUP BY s.submissionId
                ORDER BY m.title, w.title";
                $yr1marks = mysqli_query($connection, $sql);;

                //populate table with data
                while ($row = mysqli_fetch_assoc($yr1marks)) {
                    echo "<tr><td>" . $row["moduletitle"] .  "</td>";
                    echo "<td>" . $row["cwtitle"] .  "</td>";
                    echo "<td>" . $row["itemtitle"] .  "</td>";
                    echo "<td>" . $row["mark"] .  "</td>";
                    echo "<td>" . $row["submittedDate"] .  "</td>";
                    echo "<td>" . $row["mitigatingReq"] .  "</td>";
                    echo "<td>" . $row["mitigatingUph"] .  "</td>";
                    echo "<td>" . $row["secondSub"] .  "</td></tr>";
                }
            ?>
        </table></br>
        <h2>Breakdown of marks for year 4:</h2>
        <table id="4Marks">
            <tr>
                <th>Module</th>
                <th>Coursework</th>
                <th>Coursework Item</th>
                <th>Mark</th>
                <th>Date Submitted</th>
                <th>Mitigating Requested</th>
                <th>Mitigating Upheld</th>
                <th>Second Submission</th>
            </tr>
            <?php
                //get marks for year 4 submissions
                $sql ="SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title AS 'itemtitle', w.title AS 'cwtitle', m.title AS 'moduletitle'
                FROM sc_submissions s 
                LEFT OUTER JOIN sc_courseworkItem c ON s.courseworkItemId = c.courseworkItemId
                LEFT OUTER JOIN sc_coursework w ON c.courseworkId = w.courseworkId
                LEFT OUTER JOIN sc_modules m ON w.moduleId = m.moduleId
                LEFT OUTER JOIN sc_modulestocourses t ON m.moduleId = t.moduleId
                WHERE stuMatric = '" . $_POST["value"] . "' AND t.yr = '4'
                GROUP BY s.submissionId
                ORDER BY m.title, w.title";
                $yr1marks = mysqli_query($connection, $sql);;

                //populate table with data
                while ($row = mysqli_fetch_assoc($yr1marks)) {
                    echo "<tr><td>" . $row["moduletitle"] .  "</td>";
                    echo "<td>" . $row["cwtitle"] .  "</td>";
                    echo "<td>" . $row["itemtitle"] .  "</td>";
                    echo "<td>" . $row["mark"] .  "</td>";
                    echo "<td>" . $row["submittedDate"] .  "</td>";
                    echo "<td>" . $row["mitigatingReq"] .  "</td>";
                    echo "<td>" . $row["mitigatingUph"] .  "</td>";
                    echo "<td>" . $row["secondSub"] .  "</td></tr>";
                }
            ?>
        </table>
        <?php
            
            //free memory
            mysqli_free_result($yr1marks);

            //close connection
            mysqli_close($connection);
        ?>
    </body>
</html> 