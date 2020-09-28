<?php
/*
./noyau/protect.php
Vérification des badges
 */

// Si il n'y a pas de badges je redirige vers le formulaire
// Attention vous aller devoir travailler avec les BASE_URL...
// Soit vous charger les constantes du public
// Soit vous cherger les constantes de l'admin...
if (!isset($_SESSION['user'])):
  header('location: ' . BASE_URL_PUBLIC . 'users/login');
endif;
