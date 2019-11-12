<?php

function connexiondb() {
$host = "remotemysql.com";
$user = "rqeQIUVSiu";
$password = "kbrLL0UHdm";
$database = "rqeQIUVSiu";

try {
    $launchconnect = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    return $launchconnect;

}
catch (Exception $error)
{
    die('Erreur : ' . $error->getMessages());
}
}