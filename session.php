<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){


include 'dbconnect.php';

$usercheck=$_POST['username'];
$passcheck=$_POST['password'];

$sqlcheck = connexiondb();
$sqlrequest = $sqlcheck->prepare('SELECT * FROM student WHERE username=?');
$sqlrequest->execute(array($usercheck)); 

if($user = $sqlrequest->fetch()){


    $error=0;
    $errorMessage="";
    
    if(!password_verify($passcheck, $user['password'])){
        $error++;
        $errorMessage=$errorMessage."<li>Wrong password, please check and try again</li>";
        $password = '';
    
    }
    
    if($error==0) {
        $_SESSION['userID'] = $user['id'];
        $_SESSION['password'] = $user['password'];

        header("location:welcome.php");

    }




} 
else {
    $$errorMessage=$errorMessage.="Wrong username";
}
}

?>