<?php
    $names = ['James', 'Michelle', 'John', 'Jerry'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./header.php') ?>

<body>
    <h1>List of names :</h1>
    <ul class="<?= count($names) > 3 ? 'more-names' : 'some-names' ?>">
        <?php foreach($names as $name) { ?>
            <li><?= $name ?> </li>
        <?php } ?>
    </ul>
</body>
</html>