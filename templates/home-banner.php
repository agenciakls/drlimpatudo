<div class="home-section home-topo">
	<?php
	date_default_timezone_set("America/Sao_Paulo");
	$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
	if (is_front_page()) {
		$arraySlide = array(
			'post_type' => 'slide',
			'order' => 'DESC',
			'orderby' => 'date'
		);
		$querySlide = new WP_Query($arraySlide);
		if ($querySlide->have_posts()) {
			?>
			<div class="home-banner">
				<div class="market-slide swiper-content">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<div class="swiper-wrapper">
						<?php
						while ($querySlide->have_posts()) {
							$querySlide->the_post();
							if ((get_field('validade') && get_field('validade') > $timeCurrent) || !get_field('validade')) {
								$bannerImage = get_the_post_thumbnail_url(get_the_ID());
								?>
								<div class="swiper-slide">
									<div class="banner-slide-single" style="background-image: url('<?php echo $bannerImage; ?>');">
										<div class="content-banner">
											<div class="container text-center">
												<div class="title-banner"><?php echo get_the_title(); ?></div>
												<div class="description-banner"><?php echo get_the_content(); ?></div>
											</div>
										</div>
									</div>
								</div><?php
							}
						}
						?>
					</div>
				</div>
			</div>
			<?php 
		}
		wp_reset_query();
	}
	else {
		?><div class="col-md-12"><div class="home-banner pages-banner d-flex" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->id, 'full'); ?>');"><h2><?php echo titleName(); ?></h2></div></div><?php
	}
	?>		
</div>