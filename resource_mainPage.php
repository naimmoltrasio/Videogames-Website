<?php require __DIR__.'/view/mainPage.php';?>
<html lang="ca">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="styles.css?version=1">
        <title>VirtualQuest</title>
    </head>
    <body>
        <div class="mainPage">
            <?php require __DIR__.'/controller/category_list.php'; ?>
            <?php require __DIR__.'/controller/product_list.php'; ?>
            <?php require __DIR__.'/view/cart.php'; ?>
        </div>
    </body>
</html>
