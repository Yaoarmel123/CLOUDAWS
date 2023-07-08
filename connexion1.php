<?php
// 1. Paramètres de connexion a la base de données
$PARAM_hote='localhost';
$PARAM_nom_bd='bd_etudiants';
$PARAM_utilisateur='root';
$PARAM_mot_passe='';
$PARAM_charset='utf8';
// 2. Creation de la connexion
try
{
	$bdd= new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd.';charset='.$PARAM_charset,$PARAM_utilisateur,$PARAM_mot_passe);
}
catch( Exception $e )
{
	die('Erreur de connexion à la base de données : <br>'.$e->getMessage().'<br>');
}
?>