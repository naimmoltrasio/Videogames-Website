<div class="llista_prod">
    <div class="grid-container">

        <?php foreach ($products as $product): ?>

            <div class="grid-item" id="product<?php echo $product['game_id']?>">
                <img src="../img/<?php echo $product['photo_url']?>" alt="photo" class="games">
                <a><?php echo $product['game_name']?></a><br>

            </div>
        <?php endforeach;?>
    </div>
    <div class="description">

    </div>

</div>


<script type="text/javascript">
    $(document).ready(function () {
        <?php foreach ($products as $product): ?>
        $('#product<?php echo $product['game_id']?>').click(function () {
            $('.grid-container').hide();
            $('.description').load('../index.php?action=detalle_producte&id_producte=<?php echo $product['game_id']?>', function () {
                console.log('Details <?php echo $product['game_id']?>');
            });
        });
        <?php endforeach; ?>
    });

</script>



