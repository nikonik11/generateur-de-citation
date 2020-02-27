<?php

define('DB_NAME', 'oss117');
define('DB_HOST','localhost:3308');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_TABLE','citations');

try
{
    $bdd = new PDO ('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
    catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$req = $bdd->query("SELECT * FROM citations ORDER BY RAND() LIMIT 1");
    while ($donnees = $req->fetch()){
    $auteur = $donnees['auteur'];
    $ctt = $donnees['citation'];
    echo $ctt . ' </br>' . $auteur;
}
