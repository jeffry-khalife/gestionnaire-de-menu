<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=recette;charset=utf8", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT nom FROM utilisateur';
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$nom = $sql->fetchAll();


?>
