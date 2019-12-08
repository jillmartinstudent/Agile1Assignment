<!DOCTYPE html>
<html>
    <head>
    <title>View a student's alphanumeric mark</title>   
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
    </head>
<body>
<!-- Taken from 'View marks for specific coursework' user story-->
<h2>View a student's alphanumeric mark</h2>
Select from pre-defined option in the field below
<p>
<?php    
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
			
	$courses = "SELECT stuMatric, firstName, secondName FROM sc_students";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);

    mysqli_close($connection);
	
?>
<!-- Query the database for a list of students and generate a drop-down list from the results. -->
<form action="return_alpha_mark.php" method="post">
<select name="value">
    <?php foreach($result as $mark): ?>
        <option value="<?= $mark['stuMatric']; ?>"><?= $mark['firstName']; ?>  <?= $mark['secondName']; ?></option>
    <?php endforeach; ?>
 
</select>
<button type="submit" name="submit" >Submit</button>
 
</form>
</body>
</html>