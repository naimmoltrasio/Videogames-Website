<?php
    function AddComandaToBD($total_comanda, $total_productos, $id_usuario)
    {
        //Comanda
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");
        $fecha_actual = date('Y-m-d');
        $sql = 'INSERT INTO "public"."Comanda"
        VALUES (DEFAULT, $1, $2, $3, $4)';
        $total_comanda = str_replace('.', ',',$total_comanda);
        $params = [$id_usuario,$fecha_actual, $total_productos,$total_comanda];
        pg_query_params($conn, $sql, $params);

        $sql2 = 'SELECT id_comanda FROM "public"."Comanda" WHERE data_creació = $1 and usuari_id = $2 and importe_total = $3';
        $params = [$fecha_actual, $_SESSION['id_usuari'], $total_comanda];
        $res = pg_query_params($conn, $sql2, $params);
        $id_comanda = pg_fetch_row($res);

        //LineaComanda
        foreach ($_SESSION['carrito'] as $item):
            $sq = 'INSERT INTO "public"."Linea_Comanda" VALUES (DEFAULT, $1, $2, $3, $4, $5)';
            $prod = str_replace(",",".", $item['precio']);
            $total = $prod*$item['cantidad'];
            $total = str_replace(".",",", $total);
            $params = [$item['cantidad'], $item['precio'], $total, $id_comanda[0], $item['id']];
            pg_query_params($conn, $sq, $params);
        endforeach;
    }
