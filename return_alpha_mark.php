<?php
	
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Coursework Management - Student's Alphanumeric Mark</title>
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

            echo "<h1>Displaying alphanumeric mark for " . $fullName . " (" . $_POST["value"] . ") " . "</h1>";
            
        ?>
        <h2>Breakdown of marks for years 3 & 4:</h2>
        <table id="3Marks">
            <tr>
                <th>Year</th>
                <th>Module</th>
                <th>Coursework</th>
                <th>Coursework Item</th>
                <th>Available Mark</th>
                <th>Student's Mark</th>
                <th>Mark %age</th>
                <th>Scale</th>
                <th>Aggregate Score</th>
                <th>Weighting</th>
                <th>Weighted Agg</th>
                
            </tr>
            <?php

                //get courseworks for year 3 and 4
                $sql = "SELECT c.title AS 'cwtitle', i.title AS 'itemtitle', i.overallMark AS 'availmark', s.mark AS 'mark', c.weighting, m.title AS 'modtitle', t.yr, ROUND(((s.mark / i.overallMark) * 100),0) AS 'percscore' 
                FROM sc_coursework c
                LEFT OUTER JOIN sc_courseworkItem i ON c.courseworkId = i.courseworkId
                LEFT OUTER JOIN sc_submissions s ON i.courseworkItemId = s.courseworkItemId
                LEFT OUTER JOIN sc_modules m ON c.moduleId = m.moduleId
                LEFT OUTER JOIN sc_modulestocourses t ON m.moduleId = t.moduleId
                WHERE s.stuMatric = '" . $_POST["value"] . "' AND t.yr IN ('3', '4')
                GROUP BY i.courseworkItemId
                ORDER BY t.yr, m.title, c.title";
                $yr1marks = mysqli_query($connection, $sql);
                
                //set variable to capture total weighted aggregated mark score
                $totalwAgg = 0;

                //populate table with data
                while ($row = mysqli_fetch_assoc($yr1marks)) {
                    echo "<tr><td>" . $row["yr"] .  "</td>";
                    echo "<td>" . $row["modtitle"] .  "</td>";
                    echo "<td>" . $row["cwtitle"] .  "</td>";
                    echo "<td>" . $row["itemtitle"] .  "</td>";
                    echo "<td>" . $row["availmark"] .  "</td>";
                    echo "<td>" . $row["mark"] .  "</td>";
                    echo "<td>" . $row["percscore"] .  "</td>";
                    
                    //get scale sql
                    $sql = "SELECT markingScale FROM sc_markingScheme WHERE perc = '" . $row["percscore"] . "'";
                    $result = mysqli_query($connection, $sql);
                    $scale = mysqli_fetch_array($result);

                    echo "<td>" . $scale['markingScale'] .  "</td>";

                    //get agg score sql
                    $sql = "SELECT aggScale FROM sc_markingdescript WHERE markingScale = '" . $scale["markingScale"] . "'";
                    $result = mysqli_query($connection, $sql);
                    $agg = mysqli_fetch_array($result);
                    echo "<td>" . $agg['aggScale'] .  "</td>";
                    
                    echo "<td>" . $row["weighting"] .  "</td>";
                    
                    //calculate weighted agg
                    $wAgg = ROUND(($agg["aggScale"]*($row["weighting"])/100),0);

                    //add item's agg score to total weighted agg score
                    $totalwAgg += $wAgg;
                    
                    echo "<td>" .$wAgg .  "</td></tr>";
                }
            ?>
        </table>
        <h2>Alphanumeric Grade:</h2>
        <?php

            //get honours score from agg grade
            $sql = "SELECT DISTINCT s.markingScale AS 'scale', aggScale, descript, honoursClass
                FROM sc_markingscheme s LEFT OUTER JOIN sc_markingdescript m
                ON s.markingScale = m.markingScale
                WHERE aggScale = '" . $totalwAgg . "'";
            
            $markResult = mysqli_query($connection, $sql);
            $alpharow = mysqli_fetch_assoc($markResult);
            $scale = $alpharow["scale"];
            $desc = $alpharow["descript"];
            $honours = $alpharow["honoursClass"];


            echo "<p><b>" . $fullName . "'s (" . $_POST["value"] . ") aggrigated score is: " . $totalwAgg . "</b></p>";
            echo "<p><b>This is considered " . $desc . " and is/would be a " . $honours . " on the honours scale.</b></p>";

            
            //free memory
            mysqli_free_result($yr1marks);

            //close connection
            mysqli_close($connection);
        ?>
    </body>
</html> 