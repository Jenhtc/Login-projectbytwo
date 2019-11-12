<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
$username = $_POST['username'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$password = $_POST['password'];
$confpassword = $_POST['confpassword'];

$error=0;
$errorMessage="";

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error++;
    $errorMessage=$errorMessage."<li>Email does not exist</li>";
    $email = '';

}

if ($password != $confpassword)
{ $error++;
    $errorMessage=$errorMessage."<li>Passwords don't match</li>";
    $password = '';
    $confpassword = '';
}
   




if($error==0) {
    $password = password_hash($confpassword, PASSWORD_DEFAULT);
    $table = 'student';
    $sqlinsert = connexiondb();
    $sqlrequest = $sqlinsert->prepare('INSERT INTO student (username, email, password) VALUES (?, ?, ?)');
    $sqlrequest->execute(array($username,$email,$password)); 
    header("Location: index.php");
}
}  





?>