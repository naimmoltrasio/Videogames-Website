<div class="llista_prod">
    <h1>LLISTAT DE PRODUCTES</h1>
        <div class="grid-container">

            <?php foreach ($products as $product): ?>

                <div class="grid-item" id="product<?php echo $product['id_producte']?>">
                    <img src="../img/<?php echo $product['Foto']?>" alt="photo" class="games">
                    <a><?php echo $product['Titulo']?></a><br>

                </div>
            <?php endforeach;?>
        </div>
    <div class="description">

    </div>

</div>


<script type="text/javascript">
    $(document).ready(function () {
        <?php foreach ($products as $product): ?>
        $('#product<?php echo $product['id_producte']?>').click(function () {
            $('.grid-container').hide();
            $('.description').load('../index.php?action=detalle_producte&id_producte=<?php echo $product['id_producte']?>', function () {
                console.log('Details <?php echo $product['id_producte']?>');
            });
        });
        <?php endforeach; ?>
    });

</script>



