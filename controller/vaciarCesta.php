<?php
    session_start();
    require_once __DIR__.'/../model/vaciarCesta.php';
    $result = vaciar_carrito();

    if($result) {
        echo "Los productos se han eliminad correctamente";
        header('Location: /../view/cartPage.php');
    }

