<!--Calculation to convert all student final marks and output in the Alpha Numeric Scale-->

<?php require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Calculation to convert all student final marks and output in the Alpha Numeric Scale </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<h2> Convert all student final marks into the Alpha Numeric Scale </h2>

<?php
//Calculate the number of submissions, then sum the results 

$total=0; 
$submissions = "SELECT submissionId FROM sc_submissions";
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

