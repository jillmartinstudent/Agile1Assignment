<!DOCTYPE html>
<html>
<body>
<!-- Taken from 'View marks for specific coursework' user story-->
<h2>View a student's average mark</h2>
Select from pre-defined option in the field below
<p>
<?php    
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
			
	//some test stuff
	$courses = "SELECT stuMatric, firstName, secondName FROM sc_students";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);
	
	print('Number of rows returned is: ' . $numberOfRows);

    mysqli_close($connection);
	
?>
<form action="return_average_mark.php" method="post">
<select>
    <?php foreach($result as $mark): ?>
        <option value="<?= $mark['stuMatric']; ?>"><?= $mark['firstName']; ?><?= $mark['secondName']; ?></option>
    <?php endforeach; ?>
 
</select>
<input type="submit">
</form-->