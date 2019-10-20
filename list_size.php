<?php require_once 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Taille</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Taille</h3>
        <form action="insert_size.php" method="POST">
            <label>
            <input type="text" name="size_name" placeholder="Entrer une nouvelle taille">
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
                $select_size = 'select * from size order by id asc;';
                $result_size = mysqli_query($conn, $select_size);
                while($column_size = mysqli_fetch_assoc($result_size)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $column_size ['id']; ?></td>
                    <td><?php echo $column_size ['name']; ?></td>
                    <td>
                    <a href="">Modifier</a>
                    </td>
                    <td>
                    <a title ="supprimer" href="delete_size.php?id=<?php echo $column_size['id'] ;?>">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </body>
</html>
