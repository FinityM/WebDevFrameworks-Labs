<?php
$pageTitle = "Students - list";
require_once '_header.php';
?>

<main>
    <ul>
        <?php
        foreach ($students as $student):
            ?>
            <li>
                <?= $student ?>
            </li>

        <?php
        endforeach;
        ?>
    </ul>
</main>

</body>
</html>
