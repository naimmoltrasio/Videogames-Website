<?php
require_once __DIR__.'/../model/usuari.php';
    session_start();

    $dades = recuperarDatosUsuario();

    $mail = $dades[1];
    $photo = $dades[2];
    $password = $dades[3];
    $nombre = $dades[4];
    $domicilio = $dades[5];
    $poblacion = $dades[6];
    $codigopostal = $dades[7];


   require __DIR__.'/../view/datosUsuario.php';


