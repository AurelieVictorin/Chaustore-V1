<?php require_once 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Couleur</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Couleur</h3>
        <form action="insert_color.php" method="POST">
            <label>
            <input type="text" name="color_name" placeholder="Entrer une nouvelle couleur">
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
                $select_color = 'select * from color order by id asc;';
                $result_color = mysqli_query($conn, $select_color);
                while($column_color = mysqli_fetch_assoc($result_color)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $column_color ['id']; ?></td>
                    <td><?php echo $column_color ['name']; ?></td>
                    <td>
                    <a href="">Modifier</a>
                    </td>
                    <td>
                    <a title ="supprimer" href="delete_color.php?id=<?php echo $column_color['id'] ;?>">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </body>
</html>
