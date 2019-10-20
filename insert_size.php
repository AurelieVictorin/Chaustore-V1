<?php

require_once('connection.php');

  if(empty($_POST['size_name'])) {
  echo 'Veuillez entrer une taille';
}
  else {
    $size_name = $_POST['size_name'];

    $req = 'INSERT INTO size(name) VALUES("'.$size_name.'")';
    $result = mysqli_query($conn, $req);
    if ($result) {
      echo "Ajouter";
    }
  }
?>
