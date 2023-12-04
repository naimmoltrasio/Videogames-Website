<?php

    require_once __DIR__ . '/../model/productes.php';
    $id_producte = $_GET['id_producte'];


    $description = getProductById($id_producte);

    require __DIR__ . '/../view/detall_producte.php';


