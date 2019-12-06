<?php
	
    //db connection
    require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Coursework Management - Return Average Mark</title>
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <script src="main.js"></script>
    </head>
    <body>
        <h1 id="title">Create module</h1>
            
            <p><b>***UNDER CONSTRUCTION****</b></p>
            <br>

            <form id="newModule">
                    <input type="text" id="modTitle" name="modTitle" placeholder="Module title" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>A module title should not exceed 100 characters</label><br>
                    <input type="text" id="lName" name="lName" placeholder="Lecturer" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>Select a lecuturer</label><br>
                </form><br>
                <button id="create" class="button">Create Module</button>
    </body>
</html>