<!DOCTYPE html>
<html>
    <head>
        <title>View marks for coursework</title>   
        <link href="index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <!--script src="main.js"></script-->
        
        <script type="text/javascript">

var categories = [];
categories["startList"] = ["(GA30003) - Advanced IT Management for Business","(GA30005) - Business Management"];        // Level 1

//(GA30003) - Advanced IT Management for Business
categories["(GA30003) - Advanced IT Management for Business"] = ["Information Security","Data", "Agile Project Delivery"];                         // Level 2

//Information Security
  categories["Information Security"] = ["Encryption","Security in an organisational context","Coursework 3"];                    // Level 3
    categories["Encryption"] = ['Assignment 1','Assignment 2']         //  Level 4
    categories["Security in an organisational context"] = ['Assignment 1','Assignment 2']                      //  Level 4
    categories['Coursework 3'] = ['Assignment 1','Assignment 2']                         //  Level 4

//Data
  categories["Data"] = ["Database design","Data analysis"];             // Level 3
    categories["Database design"] = ['Assignment 1','Assignment 2'];             // Level 4 only
    categories["Data analysis"] = ['Assignment 1','Assignment 2'];                         // Level 4 only

//Agile Project Delivery	
  categories["Agile Project Delivery"] = ["Sprint 1", "Sprint 2"];             // Level 3
    categories["Sprint 1"] = ["Sprint 1 assignment"];             // Level 4 only
    categories["Sprint 2"] = ["Sprint 2 assignment"];                         // Level 4 only
	
	
	
//(GA30005) - (GA30005) - Business Management
categories["(GA30005) - Business Management"] = ["Administration and implementation","Decision making","Procurement"];      // Level 2

//Administration and implementation
  categories["Administration and implementation"] = ["Coursework 1","Coursework 2","Coursework 3"];                    // Level 3
    categories["Coursework 1"] = ['Assignment 1','Assignment 2']         //  Level 4
    categories["Coursework 2"] = ['Assignment 1','Assignment 2']                      //  Level 4
    categories['Coursework 3'] = ['Assignment 1','Assignment 2']                         //  Level 4

//Decision making
  categories["Decision making"] = ["Coursework 1","Coursework 2","Coursework 3"];               // Level 3
    categories["Coursework 1"] = ['Assignment 1','Assignment 2']         //  Level 4
    categories["Coursework 2"] = ['Assignment 1','Assignment 2']                      //  Level 4
    categories['Coursework 3'] = ['Assignment 1','Assignment 2']                         //  Level 4

//Procurement
  categories["Procurement"] = ["Coursework 1","Coursework 2","Coursework 3"];              // Level 3
    categories["Coursework 1"] = ['Assignment 1','Assignment 2']         //  Level 4
    categories["Coursework 2"] = ['Assignment 1','Assignment 2']                      //  Level 4
    categories['Coursework 3'] = ['Assignment 1','Assignment 2']                         //  Level 4


var nLists = 4; // number of lists in the set

function fillSelect(currCat,currList){
  var step = Number(currList.name.replace(/\D/g,""));
  for (i=step; i<nLists+1; i++) {
    document.forms[0]['List'+i].length = 1;
    document.forms[0]['List'+i].selectedIndex = 0;
    document.getElementById('List'+i).style.display = 'none';
  }
  var nCat = categories[currCat];
  if (nCat != undefined) { 
    document.getElementById('List'+step).style.display = 'inline';
    for (each in nCat) 	{
      var nOption = document.createElement('option'); 
      var nData = document.createTextNode(nCat[each]); 
      nOption.setAttribute('value',nCat[each]); 
      nOption.appendChild(nData); 
      currList.appendChild(nOption); 
    }
  } 
}

function getValues() { 
  var str = '';
  str += document.getElementById('List1').value+'\n';
  for (var i=2; i<=nLists; i++) {
    if (document.getElementById('List'+i).selectedIndex != 0) {
      str += document.getElementById('List'+i).value+'\n'; }
  }
  alert(str); 
}

function init() { fillSelect('startList',document.forms[0]['List1']); }

navigator.appName == "Microsoft Internet Explorer"
   ? attachEvent('onload', init, false) 
		   : addEventListener('load', init, false);	

</script>

    </head>
    <body>

        <h2> View marks for coursework </h2>
        <p>Select a module from one of the pre-defined options in the drop down field below</p>

            <?php  
        //include db connection details, can't link using full www path as I think it's disabled for security reasons
	//using path on disk instead
	require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');
     
/* CODE FROM SPRINT 1
        	$courses = "SELECT courseworkId, title FROM sc_coursework";
    $result = mysqli_query($connection, $courses);
	$numberOfRows = mysqli_affected_rows($connection);
         * 
         *  mysqli_close($connection);
         */
        
        
//SPRINT 2 CODE
        // https://www.youtube.com/watch?v=TNPxG2yrPlM
            $modules = "SELECT moduleId, title FROM sc_modules";
            $result = mysqli_query($connection, $modules);  
           $numberOfRows = mysqli_affected_rows($connection);
       ?>
        
        
<!-- Query the coursework table within the database to populate the drop down field -->
<!--form action="coursework_output.php" method="post">
<select name="value">
    
    <?php
    foreach($result as $module):
    ?>
    
    <option value="<?=$module['moduleId']; ?>"> <?=$module['title'];?></option>
    <?php endforeach; ?>
    
    
</select>
<button type="submit" name="submit"> Submit </button>

</form-->

<form action="coursework_output.php" method="post">

<select name='List1' id="List1" onchange="fillSelect(this.value,this.form['List2'])">
<option selected>Select a course</option>
</select> &nbsp;

<select name='List2' id="List2" onchange="fillSelect(this.value,this.form['List3'])" class="DDlist">
<option selected>Select a module</option>
</select> &nbsp;

<select name='List3' id="List3" onchange="fillSelect(this.value,this.form['List4'])" class="DDlist">
<option selected >Select the coursework</option>
</select> &nbsp;

<select name='List4' id="List4" class="DDlist">
<option selected >Select an assignment</option>
</select> &nbsp;

<!-- can add more levels if desired as "List5"+ -->
<button onclick="getValues()">Show selections</button>
</form>

    </body>
    
</html>