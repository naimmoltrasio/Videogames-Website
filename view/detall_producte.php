<?php session_start()?>
<?php foreach ($description as $descripcio): ?>
    <div class="grid-item" id="product<?php echo $descripcio['id_producte']?>">
        <img src="../img/<?php echo $descripcio['Foto']?>" alt="photo" class="games">
        <a><?php echo $descripcio['Titulo']?></a><br>
        <?php echo $descripcio['descripcio'] ?>
        <?php $_SESSION['precio'] = $descripcio['precio']; ?>
        <?php echo $descripcio['precio'] ?>
    </div>
    <form method="POST" id="realizar" action="../index.php?id_productos=<?php echo $descripcio["id_producte"];?>&action=cart">
        <button class="addCart" data-product-id="<?php echo $descripcio["id_producte"]?>">Add to Cart</button>
        <input type="text" name="cantidad" placeholder="Introduce cantidad" pattern="[1-9]" required>
    </form>
    <?php $_SESSION['id_producte'] = $descripcio['id_producte']; ?>
    <?php $_SESSION['foto_juego'] = $descripcio['Foto']; ?>
    <?php $_SESSION['titulo'] = $descripcio['Titulo']; ?>
<?php endforeach;?>

<script>


    $(document).ready(function() {
        $(".addCart").click(function () {

        }

            productId = <?php echo $descripcio["id_producte"]?>;
            productQuantity = $("#product-quantity").val();


            //Aquí se enviaría la solicitud al servidor con la información del producto
        });
        $.ajax({
            url: "/../controller/cart.php",
            type: "POST",
            data: {
                id_productos: productId,
                cantidad: productQuantity,
            },
            success: function(response) {
                // processar la resposta del script PHP i actualitzar la vista del carret
            },
            error: function() {
                // mostrar un missatge d'error al usuari
            }
    }
</script>
