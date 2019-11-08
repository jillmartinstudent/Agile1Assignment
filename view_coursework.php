<!DOCTYPE html>
<html>
    <head>
    <title>View marks for coursework</title>   
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
    </head>
<body>
<!-- Taken from 'View marks for specific coursework' user story-->
<h2>View marks for coursework</h2>
Select from pre-defined option in the field below
<p>
<?php    
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
			
	//some test stuff
	$courses = "SELECT courseworkId, title FROM sc_coursework";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);
	
	print('Number of rows returned is: ' . $numberOfRows);

    mysqli_close($connection);
	
?>

<form action="return_courseware.php" method="post">
<select>
    <?php foreach($result as $course): ?>
        <option value="<?= $course['courseworkId']; ?>"><?= $course['title']; ?></option>
    <?php endforeach; ?>
 
</select>
<input type="submit">
</form-->
