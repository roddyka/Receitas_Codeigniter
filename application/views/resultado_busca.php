
 <div class="container" itemscope itemtype="http://schema.org/Recipe" style="margin-top:50px;">

<div class="widget">
    <p class="num_resultados">Sua busca por: <span class="blue"><?php echo $busca; ?></span>,
   encontrou <?php echo count($receitas); ?> resultados.</p>
<span class="line margin-bottom-20"></span>
<div class="clearfix"></div>
 
<ul class="categories">
<?php 
        
    foreach($receitas as $receita): ?>
         <li>
             <?php
                echo anchor('receitas/ver/'.$receita->slug_receita,$receita->nome);
             ?>
         </li>
<?php endforeach; ?>
</ul>

</div>

</div>
    

