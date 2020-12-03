<?php 
    session_start();
?> 

<?php

function afficherliste(){
    
    $dbhost = "localhost"; 
    $dbname = "gsb_frais"; 
    $dbuser = "root"; 
    $dbpass = "root"; 

    $user = $_SESSION["id"];
    $password = $_SESSION["mdp"];

    // database connection 
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass); 
    

    $result = $conn->prepare(
     "SELECT * FROM fichefrais JOIN visiteur ON fichefrais.idVisiteur = visiteur.id WHERE login= '$user' AND mdp= '$password'"
     ); 
    $result->execute(); 
    $rows = $result->fetchall(); 

    return $rows;

}

?>