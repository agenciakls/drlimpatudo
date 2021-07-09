<section class="section section-services">
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<h3 class="title">Balanças</h3>
			</div>
		</div>
		<div class="list-services row">
			<?php 
			$listaServices = array(
				array(
					'img' => 'comercial.png',
					'name' => 'Comercial',
					'link' => InfoVar::show('comercial')
				),
				array(
					'img' => 'plataforma.png',
					'name' => 'Plataforma',
					'link' => InfoVar::show('plataforma')
				),
				array(
					'img' => 'mecanica.png',
					'name' => 'Mecanica',
					'link' => InfoVar::show('mecanica')
				),
				array(
					'img' => 'antropometrica.png',
					'name' => 'Antropométrica',
					'link' => InfoVar::show('antropometrica')
				),
			);
			foreach ($listaServices as $singleService) {
				?>
				<div class="col-md-3 col-6">
					<a href="<?php echo get_page_link($singleService['link']); ?>">
						<div class="single-services">
							<img src="<?php echo get_bloginfo('template_url') . '/img/icons/' . $singleService['img']; ?>" alt="" class="img-services">
							<div class="title-services"><h3><?php echo $singleService['name']; ?></h3></div>
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<h3 class="title">Equipamentos</h3>
			</div>
		</div>
		<div class="list-services row">
			<?php 
			$listaServices = array(
				array(
					'img' => 'padaria.png',
					'name' => 'Padaria',
					'link' => InfoVar::show('padaria')
				),
				array(
					'img' => 'acougue.png',
					'name' => 'Açougue',
					'link' => InfoVar::show('acougue')
				),
				array(
					'img' => 'restaurantes.png',
					'name' => 'Restaurantes',
					'link' => InfoVar::show('restaurantes')
				),
				array(
					'img' => 'supermercados.png',
					'name' => 'Supermercados',
					'link' => InfoVar::show('supermercados')
				),
			);
			foreach ($listaServices as $singleService) {
				?>
				<div class="col-md-3 col-6">
					<a href="<?php echo get_page_link($singleService['link']); ?>">
						<div class="single-services">
							<img src="<?php echo get_bloginfo('template_url') . '/img/icons/' . $singleService['img']; ?>" alt="" class="img-services">
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