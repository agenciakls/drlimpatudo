<section class="section section-portfolio background-radius tl-4">
	<div class="container">	
		<div class="stars-portfolio">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/stars.png" alt="">
		</div>
		<h3 class="title-portfolio">RESULTADOS INCRÍVEIS</h3>
		<div class="list-portfolio list-portfolio main-portfolio" id="slide-noticias"> 	
			<?php 
			$argsTips = array(
				'post_type' => 'portfolios',
				'posts_per_page' => 4
			);
			$listTips = new WP_Query($argsTips);
			if ($listTips->have_posts()) {
				while ($listTips->have_posts()) {
					$listTips->the_post();
					?>
					<div class="single-portfolio carousel-cell mb-4">
						<?php
						if (has_post_thumbnail()) { ?>
							<div class="img-default">
								<img src="<?php echo the_post_thumbnail_url('medium_large') ?>" alt="" class="img-portfolio img-fluid">
							</div>
							<?php
						}
						else { 
							?><div class="img-default"><h3><?php the_title(); ?></h3></div><?php
						}
						?>
					</div>
					<?php 
				}
			}
			/*
			?>
			<div class="col-md-12 text-right">
				<a href="<?php echo get_post_type_archive_link('artigos'); ?>">
					<button type="button" class="button-portfolio">
					VER TODAS AS DICAS
					</button>
				</a>
			</div>
			*/ ?>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-primary" type="button">Eu quero</button></a>
	</div>
</section>
<script>
$(window).load(function() {
	$('#slide-noticias').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		wrapAround: true
	});
});
</script>