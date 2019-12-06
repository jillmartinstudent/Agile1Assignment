
<!DOCTYPE html>
<html>
    <head>
        <title> Calculation to convert all student final marks and output in the Alpha Numeric Scale </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
    
<!--Calculation to convert all student final marks and output in the Alpha Numeric Scale-->

<h2> Student's Alpha Numeric Grade </h2>

<?php

    //connect to db
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

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

    if ($numberOfRows <> 0) {
    $avMark = round($total/$numberOfRows);
    }

    //get student name
    $sql = "SELECT firstName, secondName FROM sc_students WHERE stuMatric = '" . $_POST["value"] . "'";
    $nameResult = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($nameResult);
    $fullName = $row["firstName"] . " " . $row["secondName"];

    if ($numberOfRows <> 0) {
        $sql = "SELECT DISTINCT s.markingScale AS 'scale', aggScale, descript, honoursClass
        FROM sc_markingscheme s LEFT OUTER JOIN sc_markingdescript m
        ON s.markingScale = m.markingScale
        WHERE s.percentage = '" . $avMark . "'";

        $result = mysqli_query($connection, $sql);
        $alpharow = mysqli_fetch_assoc($result);
        $scale = $alpharow["scale"];
        $aggScale = $alpharow["aggScale"];
        $desc = $alpharow["descript"];
        $honours = $alpharow["honoursClass"];

        echo "<p><b>" . $fullName . "'s (" . $_POST["value"] . ") final grade is : " . $scale . "</b></p><br>";
        echo "<p>This is considered " . $desc . " and is/would be a " . $honours . " on the honours scale, with a aggregated scale of " . $aggScale . ".</p>";

    } else {
        echo "<p><b>" . $fullName . "'s (" . $_POST["value"] . ") has not completed any submissions yet.</b></p><br>";
    }


?>
</body>
</html>
