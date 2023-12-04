<?php

    /**
     * @return array
     */

    function getCategories($pdo): array
    {
        try {
            $stmt = $pdo->query("SELECT * FROM categories");
            $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categorias;
        } catch (PDOException $e) {
            // Manejar el error según tus necesidades (registro, notificación, etc.)
            error_log("Error al obtener categorías: " . $e->getMessage(), 0);
            return false;
        }
    }
    /**
     * @param int $categoryId
     *
     * @return array
     */

    function getCategoryById(int $categoryId): array
    {
        $conn = pg_connect("host=localhost port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");;

        $sql = 'SELECT *  FROM "public"."Categoria"
                WHERE id_categoria = $categoryId';
        $params=[$categoryId];
        $stmt = pg_query_params($conn, $sql, $params) or die ("ERROR getCategoryById");

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }