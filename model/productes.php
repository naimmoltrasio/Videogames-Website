<?php

    /**
     * @param int $catgoryId
     * @return array
     */

    function getProductsByCategory(int $category_id, $pdo): array
    {
        try {
            $stmt = $pdo->prepare("SELECT * FROM Games WHERE category_id = :category_id");
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
            $stmt->execute();
            $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $games;
        } catch (PDOException $e) {
            // Manejar el error según tus necesidades (registro, notificación, etc.)
            error_log("Error al obtener juegos por categoría: " . $e->getMessage(), 0);
            return false;
        }
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
