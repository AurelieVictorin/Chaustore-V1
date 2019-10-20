<?php require_once 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Catégorie</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Catégorie</h3>
        <form action="insert_category.php" method="POST">
            <label>
            <input type="text" name="category_name" placeholder="Entrer une nouvelle catégorie">
            </label>
            <button name="submit">Ajouter</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <?php
                $select_category = 'select * from category order by id asc;';
                $result_category = mysqli_query($conn, $select_category);
                while($column_category = mysqli_fetch_assoc($result_category)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $column_category ['id']; ?></td>
                    <td><?php echo $column_category ['name']; ?></td>
                    <td>
                    <a href="">Modifier</a>
                    </td>
                    <td>
                    <a title ="supprimer" href="delete_category.php?id=<?php echo $column_category['id'] ;?>">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </body>
</html>
