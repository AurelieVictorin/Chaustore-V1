<?php

require_once 'connection.php';
$brand_id = $_GET['GetID'];
$req = "select * from brand where brand_id=''".$brand_id."'";
$result = mysqli_query($conn, $req);

while($column_brand = mysqli_fetch_assoc($result)) {
    $brand_id = $column_brand ['id'];
    $brand_name = $column_brand ['name'];
    $brand_logo = $column_brand ['logo'];
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marque</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Modifier une marque</h3>
        <form action="update_brand.php" method="POST">
            <label>
            <input type="text" name="brand_name" placeholder="Modifier la marque" value="<?php echo $brand_name ?>">
            <input type="" name="brand_logo" placeholder="Modifier le logo de la marque" value="<?php echo $brand_logo ?>">
            </label>
            <button name="update">"Modifier"</button>
        </form>
      </body>
</html>
