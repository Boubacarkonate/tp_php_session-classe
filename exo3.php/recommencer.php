<?php
//PAGE INVISIBLE POUR L'UTILISATEUR

//démarrage de la session pour récupérer les clés supprimmées précédemment 
session_start();

//destruction des clés session
session_destroy();

//redirection vers le formulaire de base en index.php
header('Location: index.php'); 

// echo $_SESSION['nomLivraison'];