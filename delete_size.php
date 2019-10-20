<?php require_once 'connection.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $select_size = "select count(id) size from size where id = '$id'";
  $result_size = mysqli_query($conn, $select_size);
  $column_size = mysqli_fetch_assoc($result_size);
  // var_dump($column_exist["exist"]);
  // die("ok");
  if ($column_size["size"] == 1) {
    $sup = "delete from size where id = '$id'";
    $result = mysqli_query($conn, $sup);
    if ($result) {
        echo "Supprimer";
    }
    else {
        echo "Erreur de suppression";
    }
  }
  else {
    echo "Cette taille n'existe pas";
  }
}
else {
  echo "Erreur";
}
?>
