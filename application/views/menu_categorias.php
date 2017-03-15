<div class="gradient0 sombra radious" id="menu_de_categorias">
    <h2>Menu de categorias</h2>
    <ul>
        <?php foreach($categorias as $cat): ?>
            <li class="gradient1 radious">
                <?php
                    echo anchor(
                        'receitas/categoria/'.$cat->slug_categoria, $cat->categoria
                    );
                ?>
            </li>
           <?php endforeach; ?>
    </ul>
</div>