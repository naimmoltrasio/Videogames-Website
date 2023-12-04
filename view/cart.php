<!--No funcional-->
<footer>
    <?php if(isset($_SESSION['carrito'])){ ?>
    <div class="order">
        <a>Resumen de compra:</a><br>
        <a>Número de productos: <?php echo $_SESSION['elementos_totales']?></a><br>
        <a>Total cost: <?php echo $_SESSION['precio_total']?>€</a>
    </div>

    <?php } ?>

</footer>



