<?php

require_once('connection.php');

  if(empty($_POST['brand_name'])) {
  echo 'Veuillez entrer une marque';
}
  else {
    $brand_name = $_POST['brand_name'];

    $req = 'INSERT INTO brand(name) VALUES("'.$brand_name.'")';
    $result = mysqli_query($conn, $req);
    if ($result) {
      echo "Ajouter";
    }
  }
?>
