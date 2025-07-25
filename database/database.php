<?php

$username = "valet"; 

$database = "blog-taf";

try {

    $pdo = new PDO("mysql:host=$servername;
    dbname=$database;
    charset=utf8",
     $username, 
    );

   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    echo "Connexion à la base de données réussie";
} catch (PDOException $e) {
    
    echo " echec de connexion à la base de données   " . 
    $e->getMessage();
}
