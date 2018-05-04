<?php

session_start();
if (isset($_POST['username']) && isset($_POST['equipement']) && isset($_POST['food'])) {
    $_SESSION['username'] = $_POST['username'];
}
// id data in session [username] 
// sinon j'afiche le formualire de conection
('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);

	
if(isset($_GET['action']) && $_GET['action'] == 'logoff') {
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
}

if(isset($_GET['action']) && $_GET['action'] == 'change') {
    $_SESSION['username'] = 'Morgan, le bel homme';
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
}

<form method="POST" action="?action=new_game">
if(isset($_GET['action']) && $_GET['action'] == 'new_game') {


<?php pas obliger de faire tableau pour recuperer les informaiton dfe session 
on peu faire
$_SESSION['player']['name'] = $_POST['name'];

if(!empty($_POST)) // si post n'est pas vide alors fait ca 

implode ( a voir pour la concatenation)


getparams => array("gameaction", "sworldlost")

implode
// htt://foo.com/index.php?keyy_1=value1&key2=value_2

array_shift($_SESSION['player1']['gameaction']) // sup un element du tableau

args et argv ? // prendre des argument en ligne de comence