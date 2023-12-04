<?php
    require_once __DIR__.'/../model/usuari.php';



    $name = $_POST["Nombre"];
    $password = $_POST["password"];
    $email = $_POST["Correo"];
    $Domicilio = $_POST["Direccion"];
    $Poblacion = $_POST["Poblacion"];
    $CP = $_POST["CP"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La direcció de correo electrónico no es vàlida";
    }

    $registrarse = register($name, $password, $email, $Domicilio, $Poblacion, $CP);

    //require __DIR__.'../view/registre.php';

    if($registrarse) {
        echo 'Usuario registrado correctamente';
        header('Location: /../index.php');
    }else{
        echo 'Error al registrar';
    }

