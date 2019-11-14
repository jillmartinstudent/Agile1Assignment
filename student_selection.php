<!DOCTYPE html>
<html>
    <head>
    <title>View a student's average mark</title>   
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
    </head>
<body>
<!-- Taken from 'View marks for specific coursework' user story-->
<h1>Search for Students:</h1>
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

    mysqli_close($connection);
	
?>
<form action="convert_final_marks.php" method="post">
<select name="value">
    <?php foreach($result as $mark): ?>
        <option value="<?= $mark['stuMatric']; ?>"><?= $mark['firstName']; ?>  <?= $mark['secondName']; ?></option>
    <?php endforeach; ?>
 
</select>
<button type="submit" name="submit" >Submit</button>
 
</form>
</body>
</html>