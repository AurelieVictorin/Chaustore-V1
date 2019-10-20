<?php require_once 'connection.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $select_category = "select count(id) category from category where id = '$id'";
  $result_category = mysqli_query($conn, $select_category);
  $column_category = mysqli_fetch_assoc($result_category);
  // var_dump($column_exist["exist"]);
  // die("ok");
  if ($column_category["category"] == 1) {
    $sup = "delete from category where id = '$id'";
    $result = mysqli_query($conn, $sup);
    if ($result) {
        echo "Supprimer";
    }
    else {
        echo "Erreur de suppression";
    }
  }
  else {
    echo "Cette catégorie n'existe pas";
  }
}
else {
  echo "Erreur";
}
?>
