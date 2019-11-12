<?php

if(isset($_SESSION['userID'])&& $_SERVER["REQUEST_METHOD"] == "POST"){
if ($_POST['confpassword']==$_POST['password']) {
    if (password_verify($_POST['password'], $_SESSION['password'])) {
   $email=$_POST['email'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $lkd=$_POST['linkedin'];
    $gith=$_POST['github'];
    $mdp=$_POST['password'];
    
    connexiondb();
    $sqlupdate = connexiondb();
$sqlrequest = $sqlupdate->prepare('UPDATE student SET email=?, first_name=?, last_name=?, linkedin=?, github=? WHERE id=?');
$sqlrequest->execute(array($email,$fname,$lname,$lkd,$gith,$_SESSION['userID'])); 

$errorMessage = $errorMessage . "<li>Profile has been edited successfully!</li>";
$error++;

}
else {
    $errorMessage = $errorMessage . "<li>Wrong password</li>";
    $error++;
}
   
}
else {
    $errorMessage = $errorMessage . "<li>Passwords don't match</li>";
    $error++;
}

}


?>