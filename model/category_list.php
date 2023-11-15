<?php

/**
 * @return array
 */

function getCategories(): array
{

    $conn = pg_connect("host=127.0.0.1 dbname=websitedb user=root password=") or die ("ERROR: No se ha podido conectar a la BD");

    $sql_categoria = 'SELECT * FROM "public"."Category"';
    $stmt = pg_query($conn, $sql_categoria) or die ("ERROR getCategories");
    //$var = pg_fetch_all($stmt);
    //var_dump($var);
    return pg_fetch_all($stmt);
}

