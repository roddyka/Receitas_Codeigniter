

<!-- Content
================================================== -->
<div class="container">

<!-- Masonry -->
<div class="twelve columns">

<!-- Isotope -->
<div class="isotope">
<?php
foreach($chamadas as $chamada): 
?>
        <!-- Recipe #1 -->
<div class="four recipe-box columns">

    <!-- Thumbnail -->
    <div class="thumbnail-holder">
     <?php
 echo anchor(
            'receitas/ver/'.$chamada->slug_receita, img('assets/imgs/receitas/'.$chamada->foto)
     );
?>

    </div>

    <!-- Content -->
    <div class="recipe-box-content">
        <h3><?php
          echo  $chamada->nome; 

?></h3>
        <p>
    <?php
       echo anchor(
            'receitas/ver/'.$chamada->slug_receita, word_limiter($chamada->texto,10)
     );
    ?>
</p>


        <div class="rating five-stars">
            <div class="star-rating"></div>
            <div class="star-bg"></div>
        </div>

        <div class="recipe-meta"><i class="fa fa-clock-o"></i> 30 min</div>

        <div class="clearfix"></div>
    </div>
</div>

<?php endforeach; ?>
</div>
<div class="clearfix"></div>

<!-- Pagination -->
<div class="pagination-container masonry">
<nav class="pagination">
    <ul>
        <li><a href="#" class="current-page">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</nav>

<nav class="pagination-next-prev">
    <ul>
        <li><a href="#" class="prev"></a></li>
        <li><a href="#" class="next"></a></li>
    </ul>
</nav>
</div>

</div>


<!-- Sidebar
================================================== -->
<div class="four columns">

<!-- Search Form -->
<div class="widget search-form">
<nav class="search">
 <div id="formbusca">
        <?php echo form_open(base_url().'index.php/receitas/buscar');
            echo form_label("Buscar", "busca");
            $data = array('name'=>'busca','id'=>'busca','class'=>'fa fa-search');
            echo form_input($data);
            echo form_submit('button_buscar','Buscar');
            echo form_close();
       
        ?>
    </div>
</nav>
<div class="clearfix"></div>
</div>


<!-- Author Box -->

<div class="widget">
<h4 class="headline">Categorias</h4>
<span class="line margin-bottom-20"></span>
<div class="clearfix"></div>

<ul class="categories">
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

<!-- Popular Recipes -->
<div class="widget">
<h4 class="headline">Matérias</h4>
<span class="line margin-bottom-20"></span>
<div class="clearfix"></div>

<ul class="categories">
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


<!-- Share -->
<div class="widget">
<h4 class="headline">Share</h4>
<span class="line margin-bottom-30"></span>
<div class="clearfix"></div>

<ul class="share-buttons">
<li class="facebook-share">
    <a href="#">
        <span class="counter">1,234</span>
        <span class="counted">Fans</span>
        <span class="action-button">Like</span>
    </a>
</li>

<li class="twitter-share">
    <a href="#">
        <span class="counter">863</span>
        <span class="counted">Followers</span>
        <span class="action-button">Follow</span>
    </a>
</li>

<li class="google-plus-share">
    <a href="#">
        <span class="counter">902</span>
        <span class="counted">Followers</span>
        <span class="action-button">Follow</span>
    </a>
</li>
</ul>
<div class="clearfix"></div>
</div>

</div>

<div class="margin-top-5"></div>

</div>
<!-- Container / End -->


</div>
<!-- Wrapper / End -->

