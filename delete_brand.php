<?php require_once 'connection.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $select_brand = "select count(id) brand from brand where id = '$id'";
  $result_brand = mysqli_query($conn, $select_brand);
  $column_brand = mysqli_fetch_assoc($result_brand);
  // var_dump($column_exist["exist"]);
  // die("ok");
  if ($column_brand["brand"] == 1) {
    $sup = "delete from brand where id = '$id'";
    $result = mysqli_query($conn, $sup);
    if ($result) {
        echo "Supprimer";
    }
    else {
        echo "Erreur de suppression";
    }
  }
  else {
    echo "Cette marque n'existe pas";
  }
}
else {
  echo "Erreur";
}
?>
