<?php
session_start();

if (isset($_SESSION['userID'])){


    include 'dbconnect.php';
    
    $sqldel = connexiondb();
    $sqlrequest = $sqldel->prepare('DELETE FROM student WHERE id=?');
    $sqlrequest->execute(array($_SESSION['userID'])); 

    header('Location: logout.php');
}