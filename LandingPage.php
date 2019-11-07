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
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


<div class="sidenav">
  <a href="#about">About</a>
  <a href="#Input Grades">Input Grades</a>
  <a href="#OutPut Grades">OutPut Grades</a>
  <a href="#Enter Coursework ">Enter Coursework</a>
</div>
  <div class="main"> 
       
        <title>S&E Student Grades</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 50%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            .Actions {
  background-color: black;
  color: white;
  margin: 10px;
  padding: 10px;
}
        </style>
           
                       <br><br>
               
    <h1>Welcome please select an option below:</h1>
<div class="Actions">
<h2>Input Class Grades</h2>
<p>Input Actions</p>
</div> 

<button class="button button2" type="button">Enter</button>
<div class="Actions">
<h2>Output Class Grades</h2>
<p>Output Actions</p>
</div>
<button class="button button2" type="button">Enter</button>
<div class="Actions">
<h2>Input Class Coursework</h2>
<p>Input Actions</p>
</div>
<button class="button button2" type="button">Enter</button>
<div class="Actions">
<h2>Output Class Coursework</h2>
<p>Output Actions</p>
</div>
<button class="button button2" type="button">Enter</button>
<div class="Actions">
<h2>Select Individual Student</h2>
<p>Input Actions</p>
</div>
  <table id="tabl">
    
  
                <td>Student First name</td>
                <td><input id="firstName" type="text"></td>
            </tr>
            
            <tr>
                <td>Student Last Name</td>
                <td><input id="lastName" type="text"></td>
            </tr>
            
            <tr>
                <td>Student Matric Number</td>
                <td><input id="Matric" type="text"></td>
            </tr>
       
    
        
        </table>
   <br><br>



<form id="frm1" action="/action_page.php">

  <input type="button" class="button button2" onclick="myFunction()" value="Submit">
  
  
<script>
function myFunction() {
  document.getElementById("frm1").submit();
}
</script>



<div class="Actions">
<h2>Enter New Course Work</h2>
<p>Input Actions</p>
</div>
<button class="button button2" type="button">Enter</button>
<div class="Actions">
<h2>Display Final Apha Numeric Gradings</h2>
<p>Input Actions</p>
</div>
            <br><br>
     

        <script src="JavaScript.js"></script>
    </body>
</html>