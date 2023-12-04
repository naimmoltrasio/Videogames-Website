<?php session_start(); ?>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../myprofile.css">
    <link rel="stylesheet" href="../style.css?version=1">
</head>
<body>
<header>
    <label for="btn-menu" class="icon-menu"></label>
    <nav class="menu">
        <a href="../index.php" class="logo">
            <img src="../img/logo.png" alt="page-logo">
        </a>
        <?php if (isset($_SESSION['mail'])) { ?>
            <img src="/../img/fotoperfil/<?php echo $_SESSION['photo']; ?>" width="63px" height="60px">
            <ul>
                <li class="submenu"><a href="#">MENU<span class="icon-down-open"></span></a>
                    <ul>
                        <li><a href="../index.php?action=datosUsuario"> MI PERFIL</a></li>
                        <li><a href="../index.php?action=logout">LOG OUT</a></li>
                        <li><a href="../index.php?action=pedidos">MIS PEDIDOS</a></li>
                    </ul>
                </li>
            </ul>
            <a href="../view/cartPage.php" class="nav-link">CART</a>
        <?php } ?>
    </nav>
</header>
    <div id="perfil" class="form">
        <form  enctype="multipart/form-data" action="/index.php?action=myprofile&editar=1" method="post">
           <div id="title-box">
            <h1> Modificar mi cuenta</h1>
           </div>
            <p>
                <label for="Nombre" class="name" >Nombre:</label>
                <input id="Nombre" name="Nombre" required="required" maxlength="10" type="character varying" value="<?php echo $nombre?>" />
            </p>
            <p>
                <label for="Correo" class="email">Correo Electrónico:</label>
                <input id="Correo" name="Correo" required="required" type="email" value="<?php echo $mail?>""/>
            </p>
            <p>
                <label for="password" class="password">Contraseña: </label>
                <input id="password" name="password" required="required" type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/>
            </p>
            <p>
                <label for="Direccion" class="direccion">Domicilio: </label>
                <input id="Direccion" name="Direccion" maxlength="50" required="required" type="character" value="<?php echo $domicilio ?>"/>
            </p>
            <p>
                <label for="Poblacion" class="Poblacion"> Poblacion: </label>
                <input id="Poblacion" name="Poblacion" maxlength="40" required="required" type="character varying" value="<?php echo $poblacion ?>"/>
            </p>
            <p>
                <label for="CP" class="CP"> Codigo Postal: </label>
                <input id="CP" name="CP" maxlength="5" required="required" type="character" value="<?php echo $codigopostal?>"/>
            </p>
            <label>Foto Perfil:</label>
            <input type="file" name="foto">
            <p class="modification button">
                <input type="submit" value="Modificar"  name="rg"/>
            </p>
            </form>
    </div>
</body>
