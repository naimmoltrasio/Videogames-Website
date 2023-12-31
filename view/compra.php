<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icon.png">
    <script type="text/javascript" src="../login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../style.css?version=1">

    <title>TheGameZone</title>
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
                        <li><a href="../index.php?action=myprofile">MODIFY PROFILE</a></li>
                        <li><a href="../index.php?action=logout">LOG OUT</a></li>
                    </ul>
                </li>
            </ul>
            <a href="../view/cartPage.php" class="nav-link">CART</a>
        <?php } ?>
    </nav>
</header>
    <p>LA COMPRA HA SIDO REALIZADA CORRECTAMENTE</p>
</body>