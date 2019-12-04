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
        <p>Select a module from one of the pre-defined options in the drop down field below</p>

            <?php  
        //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
     
/* CODE FROM SPRINT 1
        	$courses = "SELECT courseworkId, title FROM sc_coursework";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);
         * 
         *  mysqli_close($connection);
         */
        
        
//SPRINT 2 CODE
        // https://www.youtube.com/watch?v=TNPxG2yrPlM
            $modules = "SELECT moduleId, title FROM sc_modules";
            $result = mysqli_query($connection, $modules);  
           $numberOfRows = mysqli_affected_rows($connection);
       ?>
        
        
<!-- Query the coursework table within the database to populate the drop down field -->
<form action="coursework_output.php" method="post">
<select name="value">
    
    <?php
    foreach($result as $module):
    ?>
    
    <option value="<?=$module['moduleId']; ?>"> <?=$module['title'];?></option>
    <?php endforeach; ?>
    
    
</select>
<button type="submit" name="submit"> Submit </button>

</form>

    </body>
    
</html>