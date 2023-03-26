<?php

    $server = "localhost";
    $login = "root";
    $pass = "";

    try
    {
        $connexion = new PDO("mysql:host=$server;dbname=school",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch(PDOException $e)
    {
        echo "Login failed : ".$e->getMessage();
    }
?>