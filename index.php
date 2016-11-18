<?php

//exo 1

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];

echo "/index.php?nom=Nemare&prenom=Jean";
echo "</br>".$nom;
echo "</br>".$prenom;

//exo 2

$age = $_GET["age"];

echo "</br>";
var_dump(isset($age));

//exo 3

$dateDebut = $_GET["dateDebut"];
$dateFin = $_GET["dateFin"];

echo "</br>/index.php?dateDebut=2/05/2016&dateFin=27/11/2016";
echo "</br>".$dateDebut;
echo "</br>".$dateFin;

//exo 4

$langage = $_GET["langage"];
$serveur = $_GET["serveur"];
echo "</br>/index.php?langage=PHP&serveur=LAMP";
echo "</br>".$langage;
echo "</br>".$serveur;

//exo 5

$semaine = $_GET["semaine"];

echo "</br>/index.php?semaine=12";
echo "</br>".$semaine;

//exo 6

$batiment = $_GET["batiment"];
$salle = $_GET["salle"];

echo "</br>/index.php?batiment=12&salle=101";
echo "</br>".$batiment;
echo "</br>".$salle;