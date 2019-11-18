<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
        
        	$courses = "SELECT courseworkId, title FROM sc_coursework";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);

    mysqli_close($connection);
    echo $numberOfRows;
    ?>
