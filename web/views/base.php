<!DOCTYPE html>

<?php 
include('./models/asset.mdl.php');
session_start();
// detruire ma session
if(isset($_GET['action']) && $_GET['action'] == 'logoff') {
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
}
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
    if (isset($_GET['question'])) {
        include('views/templates/questions.tmpl.php');
    }elseif (isset($_GET['start'])) {
        include('./views/templates/character.php');
    } else {
        include('views/templates/login.tmpl.php');
    }
    //include('./views/templates/questions.tmpl.php'); 
    ?>
    <?php include('./views/templates/footer.tmpl.php'); ?>
</body>
</html>
