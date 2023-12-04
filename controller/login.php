<?php
    require __DIR__.'/../model/usuari.php';
    session_start();
    login();

    require __DIR__.'/../view/login.php';

?>


