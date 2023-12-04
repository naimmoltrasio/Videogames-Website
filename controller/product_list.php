<?php

    require_once __DIR__ . '/../model/productes.php';

    $categoryId = $_GET['category_id'];


    //$category = getCategoryById(1);
    $products = getProductsByCategory($categoryId);

    //$title = $category['name'];

    require_once __DIR__ . '/../view/product_list.php';

