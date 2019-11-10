   <?php 
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');




   $conn = mysql_connect($sc_students, $sc_submissions, $sc_coursework, $sc_modules, $sc_lecturers);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

  
 
$sql = "SELECT *  FROM sc_students, sc_submissions NATURAL JOIN stuMatric  
where stuMatric = {$stuMatric};    





	$stuMatric=$_GET[stuMatric];
	$firstName=$_GET[firstName];
	$secondName=$_GET[secondName];
        
	$moduleId=$_GET[moduleId];
	$title=$_GET[title];
        
	$lectuerId=$_GET[lectuerId];
	$firstName=$_GET[firstName];
	$secondName=$_GET[secondName];
        
	$courseworkId=$_GET[courseworkId];
	$mark=$_GET[mark];
        

?>


<!DOCTYPE html>
<html>

<!-- Taken from   -->  


    
  <h1>  Student Selection Screen </h1>
    
   
<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				<td>
					<img src='images.jpg' width=120 height=120>
				</td>
				<td>
					<b><font size='5'>Coursework Mark Results </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='4' color='grey'><b><?php  echo "$title"></b></font>?>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr><td><font size='4'><?php echo "$stuMatric"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$firstName";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" lastName";?></font></td></tr>
				<tr><td><font size='4'><?php echo "$moduleId"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"$gender";?></font></td></tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Lectuer Id</i></th><th><i>First Name</i></th><th><i>Last Name </i></th><th><i>Course Work ID</i></th><th><i>Marks obtained</i></th></tr>
				<tr><td>lectuerId</td><td>firstName</td><td>secondName</td>  <td><?php echo "$courseworkId"; ?></td><td><?php echo "$mark"; ?></td></tr>

				
			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>