<?php

$conn = mysqli_connect('127.0.0.1', 'aurelie', '');
mysqli_select_db($conn,'simplon_chaustore');
mysqli_set_charset($conn,'utf8');

if(!$conn) {
  die('Erreur de connexion');
}
?>
