<?php

    function getProductesCategoria(int $categoria_id): array
    {
        $conn = pg_connect("host=localhost port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");;
        $sql = 'SELECT id
        FROM Categoria
        WHERE id = :categoria_id';


        $stmt = $conn->prepare($sql);
        $stmt->execute( ['category_id' => $categoryId,]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }