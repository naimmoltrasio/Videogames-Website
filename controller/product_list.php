<?php

    $dsn = "mysql:host=localhost;dbname=websitedb";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Success";
    } catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        exit(); // Termina la ejecución si no se puede conectar a la base de datos
    }


    $category = $_GET['category_id'];

    require_once __DIR__ . '/../model/productes.php';
    $products = getProductsByCategory(1, $pdo);


    require_once __DIR__ . '/../view/product_list.php';

