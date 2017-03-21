<div id="conteudo" class="gradiente0 sombra radious">
   <?php echo heading('Receitas simplesmente deliciosas',2);
    if(count($receita) > 0){ ?>
    <ul>
        <?php
            echo heading($receita[0]->categoria,3);
        
                foreach($receita as $receita): ?>
                <li class="gradient1 radious">
                    <?php echo anchor(
                        'receitas/ver/'.$receita->slug_receita,
                        $receita->nome
                        )
                    ?>
                </li>
            <?php endforeach; ?>
    </ul>
    <?php }else{
        echo "<p class='zero-resultados'>:-( Nenhuma receita encontrada nesta categoria.</p>";
    } ?>
</div>

