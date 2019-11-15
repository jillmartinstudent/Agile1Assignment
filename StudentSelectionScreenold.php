<!DOCTYPE html>
<html>
    <head>
    <title> Student Selection Screen</title>   
    <link href="index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="main.js"></script>
    </head>
<body>

<p>
<?php    
	
    //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
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

        
 <h1>
        SEARCH FOR STUDENTS:
      </h1>


<form action ="convert_final_marks.php" method="post">
    <input type="text" name="studentID" placeholder="Student ID number"> required/><br><br>
      <input type="submit" name="search" value="Submit"/><br><br>
      <table>
          <tr>
              <th> Student Matric ID </th>
              <th> Student First Name </th>
              <th> Student Last Name </th>
          </tr>
          
          <?php while($row = mysqli_fetch_array($search_result)):?>
          
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
