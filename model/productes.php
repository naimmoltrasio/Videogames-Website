<?php

    /**
     * @param int $catgoryId
     * @return array
     */

    function getProductsByCategory(int $categoryId): array
    {
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");

        $sql_products = 'SELECT * FROM "public"."Producte"
                         WHERE categoria_id=$1';
        $params=[$categoryId];
        $stmt = pg_query_params($conn, $sql_products, $params) or die ('ERROR getProductsByCategory');

        return pg_fetch_all($stmt);
    }

    /*
     * @param int $id_producte
     *
     * @return array
     */

    function getProductById($id_producte)
    {
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");
        $sql = 'SELECT * FROM "public"."Producte"
                WHERE id_producte=$1';
        $params=[$id_producte];
        $stmt = pg_query_params($conn, $sql, $params) or die ('ERROR getProductById');
        return pg_fetch_all($stmt);
    }
