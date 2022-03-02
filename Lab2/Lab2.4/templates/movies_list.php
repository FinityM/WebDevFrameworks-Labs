<!doctype html>
<html lang="en">
<head>
    <title>movie list page</title>
</head>
<body>

<?php
require_once '_nav.php';
?>

<h1>List of movies (from DB!)</h1>

<?php
foreach ($movies as $movie):
?>
    id = <?= $movie->getId() ?>
    <br>
    title = <?= $movie->getTitle() ?>
    <br>
    price = <?= $movie->getPrice() ?>
    <br>
    category = <?= $movie->getCategory() ?>
    <hr>
<?php
endforeach;
?>
</body>
</html>