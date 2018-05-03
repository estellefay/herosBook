

<?php

// detruire ma session
if(isset($_POST['action']) && $_POST['action'] == 'logoff') {
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
}

//aficher mes variable en mode travail
var_dump($_SESSION);

$listFood = $_SESSION['food'];

if (isset($_SESSION['username']) && isset($_SESSION['equipement']) && isset($_SESSION['food'])) {
    echo 'Hello your name is '.$_SESSION['username'].' and you equipment is '.$_SESSION['equipement'];
    
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