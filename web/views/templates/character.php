

<?php

//aficher mes variable en mode travail
var_dump($_SESSION);

$listFood = $_SESSION['players_1']['food'];


if (isset($_SESSION['players_1']['username']) && isset($_SESSION['players_1']['equipement']) && isset($_SESSION['players_1']['food'])) {
    echo 'Hello your name is '.$_SESSION['players_1']['username'].' and you equipment is '.$_SESSION['players_1']['equipement'];
    echo ' You have';
    foreach ($listFood as $food) {
    echo ('<br>');
    echo($food);
    echo ('<br>');
    };
}

?>

<!DOCTYPE html>
</br>
<label><a href="http://192.168.122.126/?question=0">here start avanture</a></label>
<label><a href="http://192.168.122.126/?action=logoff">Log out</a></label>