<!DOCTYPE html>

<?php 
include('./models/asset.mdl.php');
session_start();
 //start my session
// Enregistrer toutes mes informations
if (isset($_POST['username']) && isset($_POST['equipement']) && isset($_POST['food'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['equipement'] = $_POST['equipement'];
    $_SESSION['food'] = $_POST['food'];
}

?>

<html>
<header>
    <meta charset="utf-8" />    
    <title>Le site dont vous êtes le héros</title>
    <link rel="stylesheet" href="css/main.css">
</header>

<body>
    <?php include('./views/templates/header.tmpl.php'); ?>

    <?php 
    if(isset($_GET['start'])) {
        include('./views/templates/character.php');
    } elseif (isset($_GET['question'])) {
        include('views/templates/questions.tmpl.php');
    }  else {
        include('views/templates/login.tmpl.php');
    }
    //include('./views/templates/questions.tmpl.php'); 
    ?>
    <?php include('./views/templates/footer.tmpl.php'); ?>
</body>
</html>
