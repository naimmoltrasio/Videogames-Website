<div class="categories">
    <h1>CATEGORY LIST</h1>
    <div class="category_elements">
        <?php foreach ($categories as $category):
            $nom_categoria = htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF - 8'); ?>
            <div id="category<?php echo $category['id_category']?>">
                <a>
                    <?php echo $nom_categoria; ?>
                </a>
                <?php echo $category['description'] ?>
            </div>
        <?php endforeach;?>
    </div>
</div>

<div class="products">

</div>

<script type="text/javascript">
    $(document).ready(function () {
        <?php foreach ($categories as $category): ?>
        $("#category<?php echo $category['id_category']?>").click(function () {
            $('.products').load('../index.php?action=productes&category_id=<?php echo $category['id_category']?>', function () {
                console.log('Carrega Productes <?php echo $category['id_category']?>');
            });
        });
        <?php endforeach; ?>
    });
</script>
