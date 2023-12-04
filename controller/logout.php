<?php
    session_start();

    if(isset($_SESSION['mail'])) {
        unset($_SESSION['mail']);
        session_unset();


        header('Location: /../index.php');
    }
    exit;
?>