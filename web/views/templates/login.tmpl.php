<?php 
include('./models/asset.mdl.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crée ton personnage</title>
    <link rel="stylesheet" href="<?= $pathCss ?>/main.css">
</head>
<body>

    <?php var_dump($_POST); ?>
        <form method="POST" action='/?start=ok'>

            <label>
                <input type="text" name="username" placeholder="Write your name">
                </br>
                <p>Choose your equipement</p>
                <input type="radio" name="equipement" value="epee"><p>epee</p>
                <input type="radio" name="equipement" value="arc"><p>arc</p>
                </br>
                <p>Choose your food</p>
                <input type="checkbox" name="food[]" value="apple"><p>apple</p>
                <input type="checkbox" name="food[]" value="orange"><p>orange</p>
                <input type="checkbox" name="food[]" value="chocolate"><p>chocolate</p>
                <input type="checkbox" name="food[]" value="Tomate"><p>Tomate</p>
                </br>
                <input type="submit" value='SEND'>
            </label>
        </form>


    
</body>
</html>