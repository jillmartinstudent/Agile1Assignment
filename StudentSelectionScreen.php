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

    
<style>
body

{
  font-family: "Lato", sans-serif;
}

    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 24px; /* Inc
                   reased text to enable scrolling */
  padding: 0px 20px;
}

@media screen and (max-height: 250px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
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
