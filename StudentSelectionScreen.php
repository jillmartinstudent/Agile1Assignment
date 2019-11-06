   <!--? php 
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php')
   -->


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
   <!--? php 
require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php')
   -->
   
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

    

<div id="qunit"></div>
  <div id="qunit-fixture"></div>
  <script src="https://code.jquery.com/qunit/qunit-2.9.2.js"></script>
  <script src="tests.js"></script>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#Input Grades">Input Grades</a>
  <a href="#OutPut Grades">OutPut Grades</a>
  <a href="#Enter Coursework ">Enter Coursework</a>
</div>
  <div class="main"> 
        
        <title>Student Selection</title>
       
            <fieldset style="width:900px">
                <legend><b>Student Section:</b></legend>
        
            
                <table border="1">
                    <tr><td>Student ID #</td><td><input type="submit" value="StudentID"></td></tr>
                    <tr><td>Student Course Code</td><td><input type="submit" value="CourseID"></td></tr>
                    <tr><td>Student UserName</td><td><input type="submit" value="UserName"></td></tr>
                 
                    
                    
                </table><br/><br/>
                <input type="button" value="Get Result">
            </fieldset>

    </body>
</html>
