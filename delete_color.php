<?php require_once 'connection.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $select_color = "select count(id) color from color where id = '$id'";
  $result_color = mysqli_query($conn, $select_color);
  $column_color = mysqli_fetch_assoc($result_color);
  // var_dump($column_exist["exist"]);
  // die("ok");
  if ($column_color["color"] == 1) {
    $sup = "delete from color where id = '$id'";
    $result = mysqli_query($conn, $sup);
    if ($result) {
        echo "Supprimer";
    }
    else {
        echo "Erreur de suppression";
    }
  }
  else {
    echo "Cette couleur n'existe pas";
  }
}
else {
  echo "Erreur";
}
?>
