<?php require_once 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marque</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Marque</h3>
        <form action="insert_brand.php" method="POST">
            <label>
            <input type="text" name="brand_name" placeholder="Entrer une nouvelle marque">
            </label>
            <button name="submit">"Ajouter"</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Logo</th>
                </tr>
            </thead>
            <?php
                $select_brand = 'select * from brand order by id asc;';
                $result_brand = mysqli_query($conn, $select_brand);
                while($column_brand = mysqli_fetch_assoc($result_brand)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $column_brand ['id']; ?></td>
                    <td><?php echo $column_brand ['name']; ?></td>
                    <td><?php echo $column_brand ['logo']; ?></td>
                    <td>
                    <a title="modifier" href="modify_brand.php?GetID=<?php echo $column_brand['id'];?>">Modifier</a>
                    </td>
                    <td>
                    <a title="supprimer" href="delete_brand.php?id=<?php echo $column_brand['id'];?>">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </body>
</html>
