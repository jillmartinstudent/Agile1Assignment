//Form login validation code

function isEmpty() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "" || password == "") {
        alert("Please complete both login fields!");
        return false;
    } else if (email = str.includes("@")) {
        return true;
    } else {
        window.open("landing_page.php");
    }
}