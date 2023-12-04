<div class="categories">
    <h1>CATEGORY LIST</h1>
    <div class="category_elements">
        <?php foreach ($categorias as $category):
            $nom_categoria = htmlentities($category['name'], ENT_QUOTES | ENT_HTML5); ?>
            <div id="category<?php echo $category['categoryId']?>">
                <a>
                    <?php echo $nom_categoria; ?>
                </a>
                <?php echo $category['description'] ?>
            </div>
        <?php endforeach;?>
    </div>
</div>

