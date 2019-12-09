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

function IsEmpty() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "" || password == "") {
        alert("Please complete both login fields");
        return false;
    } else if (!(email = str.includes("@"))) {
        alert("Please enter valid email address");
        return false;
    } else {
        document.getElementById("form1").submit();
    }
}

function signUp(){
    window.open("signup.php");
}

//Sign up page validation

function compForm() {
    var fName = document.getElementById("fname").value;
    var sName = document.getElementById("sname").value;
    var emailadd = document.getElementById("emailadd").value;
    var pword = document.getElementById("pword").value;
    var confpword = document.getElementById("cpword").value;
    if (fName == "" || sName == "" || emailadd == "" || pword == "" || confpword == "") {
        alert("You must complete all form fields!");
        return false;
    } else if (emailadd = str.includes("@")) {
        return true;
    }
}