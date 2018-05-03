<?php 
include ('./models/asset.mdl.php');
?>

<html>
<header>
    <meta charset="utf-8" />    
    <title>Le site dont vous êtes le héros</title>
    <link rel="stylesheet" href="<?= $pathCss ?>/main.css">
</header>

<body>
    <?php include('./views/templates/header.tmpl.php'); ?>
    <?php include('./views/templates/questions.tmpl.php'); ?>
    <?php include('./views/templates/footer.tmpl.php'); ?>
</body>

</html>
