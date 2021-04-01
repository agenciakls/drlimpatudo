<section class="section section-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-detail">Vamos até você!</h3>
			</div>
		</div>
		<div class="list-detail row">
			<?php 
			$listaServices = array(
				array(
					'icon' => '<i class="fas fa-phone"></i>',
                    'name' => 'Entre em Contato',
                    'description' => 'Atendimento super rápido!'
				),
				array(
					'icon' => '<i class="far fa-calendar-alt"></i>',
                    'name' => 'Agende o serviço',
                    'description' => 'Para sua casa ou empresa!'
				),
				array(
					'icon' => '<i class="fas fa-users"></i>',
                    'name' => 'Serviço de Qualidade',
                    'description' => 'Vamos até o local prestar o serviço'
				),
				array(
					'icon' => '<i class="far fa-credit-card"></i>',
                    'name' => 'Após a execução',
                    'description' => 'Aceitamos pagamentos em cartão'
				),
				array(
					'icon' => '<i class="far fa-check-square"></i>',
                    'name' => 'Garantia Total',
                    'description' => 'Garantimos a qualidade do serviço'
				),
				array(
					'icon' => '<i class="fas fa-couch"></i>',
                    'name' => 'Serviço Completo',
                    'description' => 'Estofado limpinho e cheiroso'
				),
			);
			foreach ($listaServices as $singleService) {
				?>
				<div class="col-md-6 col-6">
					<div class="single-detail">
						<div class="title-detail">
							<div class="icon-detail">
								<?php echo $singleService['icon']; ?>
							</div>
							<h3><?php echo $singleService['name']; ?></h3>
						</div>
						<div class="description-detail">
							<p><?php echo $singleService['description']; ?></p>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-secundary" type="button">Ligue agora mesmo!</button></a>
	</div>
</section>