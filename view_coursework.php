<!DOCTYPE html>
<html>
<body>
<!-- Taken from 'View marks for specific coursework' user story-->
<h2>View marks for coursework</h2>
Select from pre-defined option in the field below
<p>
    
<!--?php
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
?-->

<?php
//Connect to our MySQL database using the PDO extension.
//$pdo = new PDO('mysql:host=localhost;dbname=agile', 'root', '');
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

$pdo = new PDO($connection);

//Our select statement. This will retrieve the data that we want.
$sql = "SELECT courseworkId, title FROM coursework";

//Prepare the select statement.
$stmt = $pdo->prepare($sql);
//$stmt = $connection->prepare($sql);
 
//Execute the statement.
$stmt->execute();
 
//Retrieve the rows using fetchAll.
$courses = $stmt->fetchAll();
 ?>
<form action="return_courseware.php" method="post">
<select>
    <?php foreach($courses as $course): ?>
        <option value="<?= $course['courseworkId']; ?>"><?= $course['title']; ?></option>
    <?php endforeach; ?>
 
</select>
<input type="submit">
</form-->
</body>
</html>
