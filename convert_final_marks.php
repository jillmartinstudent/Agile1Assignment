
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

<?php
//Take the StuMatric from studentSelectionScreen, calculate the number of submissions for that student, then sum the results.


$total=0; 
$submissions = "SELECT submissionId FROM sc_submissions WHERE stuMatric = $valueToSearch";
$query = mysql_query($submissions);
while ($row = mysql_fetch_assoc($query)) {
echo "{$row['Submission: ']}<br />";
$total += $row['Submission'];
}
echo "Total = $total";
        
?>

<br> <br> 

    
<?php
//divide the sum of the results by the number of submissions (avg Mark) and round to 0 decimal places
        
if ($query -> num_rows > 0) {
    $avgMark = $total / $submissions;
    echo ("The average mark is: (round($avgMark,0))");
}

    mysqli_close($connection);
	
?>

<br> <br> 

<?php
// lookup the number from the sc_markingscheme table.

$grade = "SELECT markingScale FROM sc_markingscheme WHERE percentage".$avgMark;
$query1 = mysql_query($grade);
$final;

if ($query1->num_rows > 0) {
    //output data of each row
    $row = $query1->fetch_assoc();
    $final = $row['markingscale'];
} else {
    echo "No results available";
    
}

?>

