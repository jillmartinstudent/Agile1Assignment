//global functions
//unhide form tips
function unHideTip(x) {

    //removes hidden attrib to display tips when field is selected
    var getSib = document.getElementById(x.id).nextSibling;
    getSib.removeAttribute("hidden");

    //removes error class after moving out of box
    document.getElementById(x.id).classList.remove("error");
}

//hide form tips
function hideTip(x) {

    //adds hidden attrib to display tips when field is selected
    var getSib = document.getElementById(x.id).nextSibling;
    getSib.hidden = true;
}

//Form login validation code

function IsEmpty() {
        window.open("landing_page.php");
    }
