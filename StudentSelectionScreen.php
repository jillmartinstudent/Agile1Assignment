<?php
	
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
	
//This search will allow the user to search ny first name / lastname and student ID number from sc_students

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query ="SELECT * FROM 'sc_students' WHERE CONCAT ('stuMatric', 'firstName', 'secondName') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable ($query);
}
else {
    $query = "SELECT * FROM 'sc_students'";
    $search_result = filterTable ($query);
}
 

 function filterTable ($query)
 {
    $connect = mysqli_connect("localhost", "root", "", "sc_students");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;

 }     
         
    
    ?>


<!DOCTYPE html>
<html>
<!-- Taken from user story Login :-Create a main landing page for staff once they have logged in that displays options.  -->  

<head>
    <title>
        Student Selection Screen
    </title>
    <style>
            
        table, tr,th,td
        {
            
          border: 1px solid black; 
        }
       
    </style>    
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>


        
 <h1>
        SEARCH FOR STUDENTS:
      </h1>


<form action ="StudentSelectionScreen.php" method="post">
    <input type="text" name="studentID" placeholder="Student ID number"> required/><br><br>
      <input type="submit" name="search" value="Filter"/><br><br>
      <table>
          <tr>
              <th> Student Matric ID </th>
              <th> Student First Name </th>
              <th> Student Last Name </th>
          </tr>
          
          <?php while($row = mysqli_fetch_array($serach_result)):?>
          
          <tr>
              <td><?php echo $row[stuMatric];?> </td>
              <td><?php echo $row[firstName];?> </td>
              <td><?php echo $row[secondName];?> </td>
          </tr>
          
          <?php endwhile;?>
  
          
          
      </table>
</form>
</body>
</html>

       
<!-- [SEARCH RESULTS] -->

    <?php
    
    $query = mysql_query("select * from sc_students");
    if (isset($_POST['search'])) {
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['stuMatric'],$r['firstName'], $r['secondName']);
        }
      } else {
        echo "No results found";
      }
    }
    ?>
  </body>
</html>
