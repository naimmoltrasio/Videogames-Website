<?php
    session_start();
    require_once __DIR__.'/../model/cart.php';
    //recuperara tanto la cantidad + precio
    $id_producto = $_SESSION['id_producte'];
    $cantidad = $_POST['cantidad'];
    $precio = $_GET['precio'];;
    $foto = $_SESSION['foto_juego'];
    $titulo = $_SESSION['titulo'];


    addProduct($cantidad, $id_producto, $foto, $titulo);

    header('Location: /../index.php');

    //$order_id = $_GET['order_id']; //esta parte hay que implementarla
    //$order = getOrderById($order_id);


    //$id = $_GET['id_add'];
    //add($id);


    //require __DIR__.'/../view/cartPage.php';

