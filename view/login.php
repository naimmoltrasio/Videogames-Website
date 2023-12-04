<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css?version=1">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../log_reg.css">
    <title>LOG IN</title>
</head>
<body id="login">
<header>
    <nav class="menu">
        <a href="../index.php" class="logo">
            <img src="../img/logo.png" alt="page-logo">
        </a>
    </nav>

</header>
<div id="login_items">
    <div id="title-box">
    <h1>LOGIN</h1>
    </div>
    <form method="POST" action="/../controller/login.php">
        <div class="label-container">
        <label>
            <input type="email" id="email" name="email" placeholder="Correo" required>
        </label>
        </div>
        <div class="label-container">
        <label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
        </label>
        </div>
        <p><a href="#" class="OC">¿Has olvidado tu contraseña?</a></p>
        <div id="lower">
            <input type="submit" value="Iniciar Sesión"><br>
        </div>
    </form>
    <a href="../view/registre.php" class="to_register"> ¿No eres miembro? </a>
    <div id="mensajeError" style="display:none"></div>
</div>
</body>
</html>

<?php
?>