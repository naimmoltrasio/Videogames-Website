<?php
    function vaciar_carrito(): bool {
        $_SESSION['carrito'] = [];
        $_SESSION['precio_total'] = 0;
        $_SESSION['elementos_totales'] = 0;
        return true;
    }