<?php
    require_once __DIR__ . '/../model/productes.php';
    $dsn = "mysql:host=localhost;dbname=websitedb";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        exit(); // Termina la ejecución si no se puede conectar a la base de datos
    }

    $category_id = $_GET['category_id'] ?? null;
    $products = getProductsByCategory($category_id , $pdo);

    require_once __DIR__ . '/../view/product_list.php';

