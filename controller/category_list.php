<?php
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

    require_once __DIR__.'/../model/categories.php';
    $categorias = getCategories($pdo);
    require __DIR__.'/../view/category_list.php';

