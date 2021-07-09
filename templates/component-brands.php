<section class="section section-brands">
	<div class="container">
		<div class="content-brands">
			<h1 class="text-center">MARCAS QUE TRABALHAMOS</h1>
			<div class="row">
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
					<div class="col-md-4 col-6 d-flex justify-content-center py-4">
						<img src="<?php bloginfo('template_url'); ?>/img/brands/<?php echo $brandCurrent; ?>" alt="">
					</div>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
</section>