<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css?version=1">
    <link rel="icon" href="../img/icon.png">
    <title>LOG IN</title>
</head>
<body>
    <header>
        <nav class="menu">
            <a href="../index.php" class="logo">
                <img src="../img/logo.png" alt="page-logo">
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
                <?php } ?>
            </a>
        </nav>
    </header>

    <div class="CartItems">
        <?php foreach($_SESSION['carrito'] as $item) {?>
                <div class="Items">
                    <img src="../img/<?php echo $item['foto']?>" class = "CartPhoto">
                    <?php echo  $item['titulo'] . "<br>" . "Cantidad:" . $item['cantidad'] . "<br>". $item['precio'] . "<br>"; ?>
                </div>
        <?php } ?>
    </div>

    <div class = "Resumen">
        <a>Total cost: <?php echo $_SESSION['precio_total']?>€</a>
        <div class = "boton">
            <form action="../index.php?action=comprar" method="POST" class="botonComprar">
                <input type="hidden" name="action" value="comprar">
                <input type="submit" value="Comprar">
            </form>
        </div>
        <div class = "boton">
            <form action="../index.php?action=vaciarCesta" method="POST">
                <input type="hidden" name="action" value="vaciarCesta">
                <input type="submit" value="Vaciar carrito">
            </form>
        </div>


    </div>

</body>


