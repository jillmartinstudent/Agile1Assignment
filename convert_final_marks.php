
<!DOCTYPE html>
<html>
    <head>
        <title> Calculation to convert all student final marks and output in the Alpha Numeric Scale </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<!--Calculation to convert all student final marks and output in the Alpha Numeric Scale-->
<?php
	
    //test php to check 
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
    //using path on disk instead
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

     $_POST["value"];

?>


<h2> Convert all student final marks into the Alpha Numeric Scale </h2>

Student Matriculation Number: <?php echo $_POST["studentID"]; ?> <br><br>

<?php
//Take the StuMatric from studentSelectionScreen, calculate the number of submissions for that student

$submissions = "SELECT s.mark, s.submittedDate, s.mitigatingReq, s.mitigatingUph, s.secondSub, c.title
FROM sc_submissions s LEFT OUTER JOIN sc_coursework c
ON s.courseworkId = c.courseworkId
WHERE stuMatric = '" . $_POST["studentID"] . "'";
$result = mysqli_query($connection, $submissions);
$numberOfRows = mysqli_affected_rows($connection);

if ($result-> num_rows > 0) {
        echo "The number of submissions for this student is: $numberOfRows <br> <br>";
    } else {
    echo "0 results";
        
//Take the StuMatric from studentSelectionScreen, calculate the number of submissions for that student, then sum the results.


$total=0; 
$submissions = "SELECT submissionId FROM sc_submissions WHERE stuMatric = $valueToSearch";
$query = mysql_query($submissions);
while ($row = mysql_fetch_assoc($query)) {
echo "{$row['Submission: ']}<br />";
$total += $row['Submission'];

}

//get total marks for all submissions and create average mark

$marks = "SELECT SUM(mark)as total_mark FROM sc_submissions WHERE stuMatric = '" . $_POST["studentID"] . "'";
$sumResult = mysqli_query($connection, $marks);
$row = mysqli_fetch_assoc($sumResult);
$total = $row["total_mark"];
$avMark = round($total/$numberOfRows);

if ($sumResult-> num_rows > 0) {
        echo "The average mark for this student is: $avMark <br> <br>";
    } else {
    echo "0 results";
}

//Lookup number from the sc_markingscheme table

$scale = "SELECT markingScale FROM sc_markingscheme WHERE percentage = '$avMark'";
$output = mysqli_query($connection, $scale);
$rows = mysqli_fetch_assoc($output);
$endResult = mysqli_affected_rows($connection);

if ($output-> num_rows > 0) {
        echo "Marking Scale Conversion: $endResult";
    } else {
    echo "0 results";
}

mysqli_close($connection);

?>

</html>
