<div class="container" itemscope itemtype="http://schema.org/Recipe" style="margin-top:50px;">

<div class="widget">
<?php 
    if(count($receita) > 0){ ?>
<h4 class="headline"><?php echo $receita[0]->categoria ?></h4>
<span class="line margin-bottom-20"></span>
<div class="clearfix"></div>
 
<ul class="categories">
<?php 
        
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

</div>

