<?php require_once 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Produit</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Produit</h3>
        <form action="insert_product.php" method="POST">
            <label>
            <input type="text" name="product_name" placeholder="Entrer un nouveau produit">
            </label>
            <input type="submit" value="Ajouter">
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <?php
                $select_product = 'select *, product.id as id, product.name as produit, category.name as categorie, brand.name as marque,color.name as couleur from product inner join category on product.category_id = category.id inner join brand on product.brand_id = brand.id inner join color on product.color_id = color.id order by product.id asc;';
                $result_product = mysqli_query($conn, $select_product);
                while($column_product = mysqli_fetch_assoc($result_product)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $column_product ['id']; ?></td>
                    <td><?php echo $column_product ['produit']; ?></td>
                    <td><?php echo $column_product ['categorie']; ?></td>
                    <td><?php echo $column_product ['marque']; ?></td>
                    <td><?php echo $column_product ['couleur']; ?></td>
                    <td><?php echo $column_product ['image']; ?></td>
                    <td><?php echo $column_product ['price']; ?></td>
                    <td><?php echo $column_product ['gender']; ?></td>
                    <td>
                    <a href="">Modifier</a>
                    </td>
                    <td>
                    <a href="">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </body>
</html>
