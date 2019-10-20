<?php

require_once('connection.php');

  if(empty($_POST['color_name'])) {
  echo 'Veuillez entrer une couleur';
}
  else {
    $color_name = $_POST['color_name'];

    $req = 'INSERT INTO color(name) VALUES("'.$color_name.'")';
    $result = mysqli_query($conn, $req);
    if ($result) {
      echo "Ajouter";
    }
  }
?>
