<div class="categories">
    <div class="category_elements">
        <?php foreach ($categorias as $categories):
            $nom_categoria = htmlentities($categories['category_name'], ENT_QUOTES | ENT_HTML5); ?>
            <div id="category<?php echo $categories['category_id']?>">
                <a>
                    <?php echo $nom_categoria; ?>
                </a>
                <?php echo $categories['category_description'] ?>
            </div>
        <?php endforeach;?>
    </div>
</div>

<div class="products">

</div>


<script type="text/javascript">
    $(document).ready(function () {
        <?php foreach ($categorias as $categories): ?>
        $("#category<?php echo $categories['category_id']?>").click(function () {

            $('.products').load('../index.php?action=products&category_id=<?php echo $categories['category_id']?>', function () {
                console.log('Carrega Productes <?php echo $categories['category_id']?>');

            });
        });
        <?php endforeach; ?>
    });
</script>
