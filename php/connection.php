<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "healthcare";

    try {
        $bd = new PDO("mysql:host=localhost;dbname=healthcare;charset=utf8", $user, $pass);      
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
        die();
    }
?>