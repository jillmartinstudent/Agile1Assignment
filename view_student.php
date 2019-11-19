<?php
	
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
	
?>

<!DOCTYPE html>
<html>


<head>
    <title>
        Student Coursework Management portal
    </title>
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>

</head>

<body id="document">
    <h1 id="title">View student</h1>
	
	<p><b>***UNDER CONSTRUCTION****</b></p>
    <br>

    <?php
        //include db connection details, can't link using full www path as I think it's disabled for security reasons
        //using path on disk instead
        require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');

        //sql for acquiring students
        $students = "SELECT stuMatric, firstName, secondName FROM sc_students";
        $result = mysqli_query($connection, $students);

    ?>

    <form id="stuselect">
        <select name="value">
            <?php foreach ($result as $stu): ?>
                <option value="<?= $stu['stuMatric']; ?>"><?= $stu['firstName']; ?>  <?= $stu['secondName']; ?></option>
            <?php endforeach; ?>

        </select>
        <button type="submit" name="submit" >Submit</button>
    </form>
    
    <?php
        //free memory
        mysqli_free_result($result);

        //close connection
        mysqli_close($connection);
    ?>
</body>


</html>
