<?php

require_once ('c:/websites/2018-ga/davidgrayland/agile/_php/dbconnect.php');


$firstname = $lastname = $email = $passW = $confpassword = '';

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email = $_POST['emailA'];
$passW = $_POST['passW'];
$pass = md5($passW);
$confpassword = $_POST['confP'];

if ($passW === $confpassword) {
    
    $sql = "INSERT INTO sc_users (firstName, secondName, emailAddress, password) VALUES ('$firstname', '$lastname', '$email', '$pass')";
    
$result = mysqli_query($connection, $sql);

}

if($result){
    header("Location: index.php");
}

?>

