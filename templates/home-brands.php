<section class="home-brands section">
	<div class="container">
		<div class="content-brands">
			<h1>MARCAS QUE TRABALHAMOS</h1>
			<div class="list-brand">
				<?php 
				$listBrand = array(
					'logo_balmak.png',
					'logo_urano_site.png',
					'logo_filizola.png',
					'ramuza.png',
					'logo_balmak.png',
					'logo_urano_site.png',
					'logo_filizola.png',
					'ramuza.png',
				);
				foreach($listBrand as $brandCurrent) {
					?>
					<div class="single-brand carousel-cell">
						<img src="<?php bloginfo('template_url'); ?>/img/brands/<?php echo $brandCurrent; ?>" alt="">
					</div>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
</section>