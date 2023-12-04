<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="../img/icon.png">
</head>
<body class="BRegist">
    <header>
        <nav class="menu">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png" alt="page-logo">
            </a>
        </nav>
    </header>
<div id="cuadrado">
    <div id="register" class="form">
        <form  action="../controller/registre.php" autocomplete="on" target="_self" method="post">
            <div class="titulo-reg">
            <h1> REGISTRO</h1>
            </div>
            <p>
                <label for="Nombre" class="name" >Nombre:</label>
                <input id="Nombre" name="Nombre" required="required" maxlength="10" type="character varying" placeholder="Manolo" />
            </p>
            <p>
                <label for="Correo" class="email">Correo Electrónico:</label>
                <input id="Correo" name="Correo" required="required" type="email" placeholder="ejemplo@mail.com"/>
            </p>
            <p>
                <label for="password" class="password">Contraseña: </label>
                <input id="password" name="password" required="required" type="password" placeholder="ej. HSDJ76XJD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>
            </p>
            <p>
                <label for="Direccion" class="direccion">Domicilio: </label>
                <input id="Direccion" name="Direccion" maxlength="50" required="required" type="character" placeholder="ej. C/Glorias "/>
            </p>
            <p>
                <label for="Poblacion" class="Poblacion"> Poblacion: </label>
                <input id="Poblacion" name="Poblacion" maxlength="40" required="required" type="character varying" placeholder="Barcelona"/>
            </p>
            <p>
                <label for="CP" class="CP"> Codigo Postal: </label>
                <input id="CP" name="CP" maxlength="5" required="required" type="character" placeholder="08372"/>
            </p>
            <p class="signin button">
                <input type="submit" value="Registrarse"  name="rg" href="../view/login.php"/>
            </p>
            <p class="change_link">
                Ya eres miembro?
                <a href="../view/login.php" class="to_register"> Login </a>
            </p>
        </form>
    </div>
</div>
</body>
</html>

