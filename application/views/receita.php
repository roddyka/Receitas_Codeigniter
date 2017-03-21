
<!-- Content
================================================== -->
<div class="container" itemscope itemtype="http://schema.org/Recipe" style="margin-top:150px;">

	<!-- Recipe -->
	<div class=" columns">
	<?php
            foreach($receita as $rec){
                
                
              
            
        ?>
	<div class="alignment">

		<!-- Header -->
		<section class="recipe-header">
			<div class="title-alignment">
				<?php echo heading($rec->nome,2); ?>
				<div class="rating four-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>
				<span><a href="#reviews">(2 reviews)</a></span>
			</div>
		</section>
		

		<!-- Slider -->
	


		<!-- Details -->
		<section class="recipe-details" itemprop="nutrition">
			<ul>
				<li>Serves: <strong itemprop="recipeYield">2 people</strong></li>
				<li>Prep Time: <strong itemprop="prepTime">15 min</strong></li>
				<li>Calories: <strong itemprop="calories">112 kcal</strong></li>
			</ul>
			<a href="javascript:self.print()" class="print"><i class="fa fa-print"></i> Print</a>
			<div class="clearfix"></div>
		</section>


		<!-- Text -->
		


		<div class="recipe-container">  

			<div class="ingredients-container">
                    
				<?php  echo "<p itemprop='description'>". nl2br($rec->texto) . "</p>"; ?>

			</div> 
			<div class="ingredients-container">
                    
				<?php  echo img('assets/imgs/receitas/'.$rec->foto); ?>

			</div> 
		</div>
		<a href="javascript:history.go(-1)" class="print"><i class="fa fa-back"></i> Voltar</a>
		<div class="clearfix"></div>



		<!-- Share Post -->
		<ul class="share-post">
			<li><a href="#" class="facebook-share">Facebook</a></li>
			<li><a href="#" class="twitter-share">Twitter</a></li>
			<li><a href="#" class="google-plus-share">Google Plus</a></li>
			<li><a href="#" class="pinterest-share">Pinterest</a></li>

			<!-- <li><a href="#add-review" class="rate-recipe">Add Review</a></li> -->
		</ul>
		<div class="clearfix"></div>
		
</div>
<?php } ?>
</div></div>



