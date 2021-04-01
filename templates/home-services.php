<section class="section section-services">
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<h3>SERVIÇOS</h3>
			</div>
		</div>
		<div class="list-services row">
			<?php 
			$listaServices = array(
				array(
					'img' => 'services-higienizacao.jpg',
					'name' => 'HIGIENIZAÇÃO',
					'link' => InfoVar::show('higienizacao')
				),
				array(
					'img' => 'services-sanitizacao.jpg',
					'name' => 'SANITIZAÇÃO',
					'link' => InfoVar::show('sanitizacao')
				),
				array(
					'img' => 'services-impermeabilizacao.jpg',
					'name' => 'IMPERMEABILIZAÇÃO',
					'link' => InfoVar::show('impermeabilizacao')
				),
				array(
					'img' => 'services-hidratacao.jpg',
					'name' => 'HIDRATAÇÃO DE COURO',
					'link' => InfoVar::show('hidratacao')
				),
			);
			foreach ($listaServices as $singleService) {
				?>
				<div class="col-md-6 col-6">
					<a href="<?php echo get_page_link($singleService['link']); ?>">
						<div class="single-services">
							<div class="img-services" style="background-image: url('<?php echo get_bloginfo('template_url') . '/img/' . $singleService['img']; ?>');">
							</div>
							<div class="title-services"><h3><?php echo $singleService['name']; ?></h3></div>
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-primary" type="button">FAÇA SEU ORÇAMENTO</button></a>
	</div>
</section>