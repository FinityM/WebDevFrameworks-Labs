<!doctype html>
<html lang="en">
<head>
    <title>list movies page</title>
</head>
<body>
<?php
require_once '_nav.php';
?>

<h1>create a NEW product</h1>

<form
        method="POST"
        action="/index.php?action=create_product"
    >

    Title:
    <input name="title">

    <br>
    <input type="submit">
</form>

</body>
</html>