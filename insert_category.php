<?php

require_once('connection.php');

  if(empty($_POST['category_name'])) {
  echo 'Veuillez entrer une catégorie';
}
  else {
    $category_name = $_POST['category_name'];

    $req = 'INSERT INTO category(name) VALUES("'.$category_name.'")';
    $result = mysqli_query($conn, $req);
    if ($result) {
      echo "Ajouter";
    }
  }
?>
