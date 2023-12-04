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
                            <li><a href="../index.php?action=myprofile">MODIFY PROFILE</a></li>
                            <li><a href="../index.php?action=logout">LOG OUT</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="../view/cartPage.php" class="nav-link">CART</a>
            <?php } ?>
        </nav>
    </header>
<div id="perfil" class="form">
    <form  enctype="multipart/form-data" action="/index.php?action=datosUsuario" method="post">
        <div id="title-box">
            <h1> Mi cuenta</h1>
        </div>
        <p>
            <label for="Nombre" class="name" >Nombre:</label>
            <input id="Nombre" name="Nombre" readonly value="<?php echo $nombre?>" />
        </p>
        <p>
            <label for="Correo" class="email">Correo Electrónico:</label>
            <input id="Correo" name="Correo" readonly value="<?php echo $mail?>" />

        </p>
        <p>
            <label for="password" class="password">Contraseña: </label>
            <input id="password" name="password" readonly value="**********" />
        </p>
        <p>
            <label for="Direccion" class="direccion">Domicilio: </label>
            <input id="Direccion" name="Direccion" readonly value="<?php echo $domicilio?>" />
        </p>
        <p>
            <label for="Poblacion" class="Poblacion"> Poblacion: </label>
            <input id="Poblacion" name="Poblacion" readonly value="<?php echo $poblacion?>"/>
        </p>
        <p>
            <label for="CP" class="CP"> Codigo Postal: </label>
            <input id="CP" name="CP" readonly value="<?php echo $codigopostal?>"/>
        </p>
        <a><img src="/../img/fotoperfil/<?php echo $_SESSION['photo']; ?>" width="170px" height="150px"></a>
    </form>
</div>
</body>
