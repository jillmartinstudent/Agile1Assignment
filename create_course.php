<?php
	
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Coursework Management - Create Course</title>
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <script src="main.js"></script>
    </head>
    <body>
        <h1 id="title">Create course</h1>
            
            <p><b>***UNDER CONSTRUCTION****</b></p>
            <br>

            <form id="newModule">
                    <input type="text" id="modTitle" name="modTitle" placeholder="Course title" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>A course title should not exceed 100 characters</label><br>
                </form><br>
                <button id="create" class="button">Create Course</button>
    </body>
</html>