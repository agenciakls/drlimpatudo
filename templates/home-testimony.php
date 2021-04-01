<section class="section section-testimony background-radius tl-4">
	<div class="container">	
		<h3 class="title-testimony">DEPOIMENTOS</h3>
		<div class="list-testimony list-posts main-testimony" id="slide-depoimentos"> 	
			<?php 
			$argsTips = array(
				'post_type' => 'depoimentos',
				'posts_per_page' => 4
			);
			$listTips = new WP_Query($argsTips);
			if ($listTips->have_posts()) {
				while ($listTips->have_posts()) {
					$listTips->the_post();
					?>
					<div class="single-testimony carousel-cell mb-4">
						<div class="text-testimony">
							<div class="img-testimony">
								<img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" alt="" class="rounded">
							</div>
							<div class="title-testimony"><?php echo get_the_title(); ?></div>
							<div class="location-testimony"><?php echo get_field('local'); ?></div>
							<div class="content-testimony"><?php echo get_the_content(); ?></div>
						</div>
					</div>
					<?php 
				}
            }
            
            ?>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-secundary" type="button">Aproveite você também</button></a>
	</div>
</section>
<script>
$(document).ready(function() {
	$('#slide-depoimentos').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		wrapAround: true
	});
});
</script>