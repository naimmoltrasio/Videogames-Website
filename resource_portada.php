<?php require __DIR__.'/view/portada.php';?>
<html lang="ca">
    <head>
        <script type="text/javascript" src="login.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css?version=1">
        <title>GameZone</title>
    </head>
<body>
    <div class="portada">
        <?php require __DIR__.'/controller/category_list.php'; ?>
        <?php require __DIR__.'/controller/product_list.php'; ?>
        <?php require __DIR__.'/view/cart.php'; ?>
    </div>
</body>
</html>
