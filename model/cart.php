<?php

    session_start();

    //Crear en la base de datos dos tablas orders y order items (yo tengo foto)
    //Las tabals tienen que devolver el total de productos y el precio total del carrito

    //Hay que hacer también una función para eliminar un producto y para añadir un producto

    function getOrderById(int $comandaId): array
    {
        $conn = pg_connect("host=localhost port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");

        $sql = 'SELECT *  FROM "public"."Comanda"
                    WHERE id_comanda = $comandaId';
        $params=[$comandaId];
        $stmt = pg_query_params($conn, $sql, $params) or die ("ERROR getCategoryById");

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    function addProduct($cantidad, $id, $foto, $titulo){

        $precio = str_replace(',', '.',$_SESSION['precio']);
        $_SESSION['precio_total'] += ($precio*$cantidad);
        $_SESSION['elementos_totales'] += $cantidad;

        $new_item = array('id' => $id, 'cantidad' => $cantidad, 'precio' => $precio, 'foto' => $foto, 'titulo' => $titulo);

        $item_exists = false;

        for($i=0; $i<sizeof($_SESSION['carrito']); $i++){
            if($_SESSION['carrito'][$i]['id'] == $new_item['id']){
                $_SESSION['carrito'][$i]['cantidad'] += $new_item['cantidad'];
                $item_exists = true;
                break;
            }
        }

        if(!$item_exists){
            $_SESSION['carrito'][] = $new_item;
        }
    }


