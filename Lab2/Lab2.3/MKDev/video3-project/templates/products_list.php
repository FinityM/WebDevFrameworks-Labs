<!doctype html>
<html lang="en">
<head>
    <title>products list page</title>
</head>
<body>

<?php
require_once '_nav.php';
?>

<h1>List of products (from DB!)</h1>

<?php
foreach ($products as $product):
?>
    id = <?= $product->getId() ?>
    <br>
    title = <?= $product->getTitle() ?>

    <br>
    <a href="/?action=edit_product&id=<?= $product->getId() ?>">
        EDIT
    </a>

    <br>
    <a href="/?action=delete_product&id=<?= $product->getId() ?>">
        DELETE
    </a>

    <hr>
    <hr>


<?php
endforeach;
?>
</body>
</html>