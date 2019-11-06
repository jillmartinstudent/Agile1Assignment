   <!--? php 
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php')
   -->

<!DOCTYPE html>


<html>
<!--   
$conn=mysql_connect("hostname","username","password");
mysql_select_db("databasename",$conn);  

--> 
 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#Input Grades">Input Grades</a>
  <a href="#OutPut Grades">OutPut Grades</a>
  <a href="#Enter Coursework ">Enter Coursework</a>
</div>
  <div class="main"> 
      
    <head>
        
        
      <div id="qunit"></div>
  <div id="qunit-fixture"></div>
  <script src="https://code.jquery.com/qunit/qunit-2.9.2.js"></script>
  <script src="tests.js"></script>  
  
  
        <title>Student Results</title>
     
            <fieldset style="width:600px">
                <legend><b>Student Selection:</b></legend>
                     <table border="1">
                <tr><td>Student ID:<input type="text" id="txtStudentID"> </td></tr>
                <tr><td>Student FirstName:<input type="text" id="txtFirstName"> </td></tr>
                <tr><td>Student LastName:<input type="text" id="txtLastName"> </td></tr> 
                <tr><td>Student Module:<input type="text" id="txtModule"> </td></tr>
                     
               
                <tr><td><input type="button" class="button button2" value="Get Result"></td></tr>
                 </table><br/><br/>
            </fieldset>
            
            <h2>Selected Student Report Card</h2>
            
            <table border="1">
                <tr><td>Student ID</td><td><input type="text" id="txtStudentID" readonly></td></tr>
                <tr><td>Student FirstName</td><td><input type="text" id="txtFirstName" readonly></td></tr>
                <tr><td>Student LastName</td><td><input type="text" id="txtLastName" readonly></td></tr>
                <tr><td>Student Module</td><td><input type="text" id="txtStudentModule" readonly></td></tr>
                <tr><td>Lecturer</td><td><input type="text" id="txtLecturer" readonly></td></tr>
                            
<?php
echo '<table>
<tr>
<td>Forename</td>
<td>Surname</td>
</tr>';
<!--
$sql="SELECT * from table where sequence = '".$_GET["sequence"]."' ";
$rs=mysql_query($sql,$conn) or die(mysql_error());
while($result=mysql_fetch_array($rs))


{
echo '<tr>
-->
    <tr><td>CourseWork</td><td><input .$result[id="txtCourseWork"].' readonly></td></tr>
    <tr><td>StudentMark</td><td><input .$result[id="txtStudentMark"].' readonly></td></tr>

</tr>
}
echo '</table>';


           
            </table>
    </body>
</html>
