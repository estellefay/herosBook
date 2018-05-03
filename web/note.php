<?php

session_start();
if (isset($_POST['username']) && isset($_POST['equipement']) && isset($_POST['food'])) {
    $_SESSION['username'] = $_POST['username'];
}
// id data in session [username] 
// sinon j'afiche le formualire de conection
('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);