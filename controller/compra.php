<?php
    session_start();

    include __DIR__. '/../model/compra.php';

    $id_usuario = $_SESSION['id_usuari'];
    $total_comanda = $_SESSION['precio_total'];
    $total_productos = $_SESSION['elementos_totales'];


    AddComandaToBD($total_comanda, $total_productos, $id_usuario);

    include __DIR__.'/../view/compra.php';


