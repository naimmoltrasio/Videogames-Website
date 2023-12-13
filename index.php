<?php
    session_start() or die('Error iniciando gestor de variables de sesión');;
    $action = $_GET['action'] ?? null;
    switch ($action){
        case 'filter':
            require __DIR__.'/resource_filter.php';
            break;
        case 'validation':
            require __DIR__.'/resource_validation.php';
        case 'products':
            require __DIR__.'/resource_product_list.php';
            break;
        case 'detalle_producte':
            require __DIR__.'/resource_product_detail.php';
            break;
        case 'login':
            require __DIR__.'/resource_login.php';
            break;
        case 'registro':
            require __DIR__.'/resource_registre.php';
            break;
        case 'cart':
            require __DIR__. '/resource_cart.php';
            break;
        case'myprofile':
            require __DIR__.'/resource_myprofile.php';
            break;
        case 'vaciarCesta':
            require __DIR__.'/resource_vaciarCesta.php';
            break;
        case 'datosUsuario':
            require __DIR__.'/resource_datosUsuario.php';
            break;
        case 'logout':
            require  __DIR__.'/resource_logout.php';
            break;
        case 'comprar':
            require __DIR__.'/resource_compra.php';
            break;
        case 'cartPage':
            require __DIR__.'/resource_cartPage.php';
            break;
        default:
            require __DIR__.'/resource_portada.php';
            break;
    }
    ?>