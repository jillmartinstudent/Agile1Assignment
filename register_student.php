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
        <h1 id="title">Register student</h1>
        
        <p><b>***UNDER CONSTRUCTION****</b></p>
        <br>

        <form id="newStu">
                <input type="text" id="fName" name="fName" placeholder="First Name" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>A first name should be between 2 and 20 characters</label><br>
                <input type="text" id="lName" name="lName" placeholder="Last Name" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>A last name should be between 2 and 20 characters</label><br>
                <input type="text" id="matric" name="matric" placeholder="Matric" onfocus="unHideTip(this)" onblur="hideTip(this)"><label hidden>A matric number should be 10 characters</label><br>
            </form><br>
            <button id="create" class="button">Register Student</button>
    </body>
</html>
