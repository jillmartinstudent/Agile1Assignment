<!DOCTYPE html>
<html>
    <head>
        <title>View marks for coursework</title>   
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <script src="main.js"></script>
    </head>
    <body>

        <h2> View marks for coursework </h2>

<?php  
    
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
        
        	$courses = "SELECT courseworkId, title FROM sc_coursework";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);

    mysqli_close($connection);
    ?>
        
        
<!-- Query the coursework table within the database to populate the dropdown field -->
<form action="coursework_output.php" method="post">
<select name="value">
    
    <?php
    foreach($result as $course):
    ?>
    
    <option value="<?=$course['courseworkId']; ?>"> <?=$course['title'];?></option>
    <?php endforeach; ?>
    
    
</select>
<button type="submit" name="submit"> Submit </button>

</form>

    </body>
    
</html>