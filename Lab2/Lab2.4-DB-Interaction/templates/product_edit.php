<!doctype html>
<html lang="en">
<head>
    <title>list movies page</title>
</head>
<body>
<?php
require_once '_nav.php';
?>

<h1>EDIT product</h1>

<form
        method="POST"
        action="/index.php?action=process_edit_product"
    >

    Id:
    <input name="id" value="<?= $product->getId() ?>" readonly>

    Title:
    <input name="title" value="<?= $product->getTitle() ?>" >

    <br>
    <input type="submit">
</form>

</body>
</html>