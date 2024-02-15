<?php

// auteur: RohanD 
// functie: startpagina

require_once "user.php";

// Maak object aan
$user = new User();

var_dump($user);

// Registeer gebruiker

$user ->registerUser();

var_dump($user);