<section class="section section-button-call">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><a href=""><button type="button" class="btn btn-primary">Chama a gente no WhatsApp</button></a></div>
			<div class="col-md-6"><a href=""><button type="button" class="btn btn-primary">Chama a gente no WhatsApp</button></a></div>
		</div>
	</div>
</section>
<section class="section section-detail">
	<div class="container">
		<div class="list-detail row">
			<?php 
			$listaServices = array(
				array(
					'img' => 'orcamento.png',
                    'name' => 'Solicite um orçamento',
                    'description' => 'Orçamento sem compromisso na mesma hora*'
				),
				array(
					'img' => 'frete.png',
                    'name' => 'Rapidez e praticidade',
                    'description' => 'Atendimento no local. Nós vamos até e realizamos o serviço se possível na hora.'
				),
				array(
					'img' => 'inmetro.png',
                    'name' => 'Nota Fiscal e Selo INMETRO',
                    'description' => 'Atendimento no local. Nós vamos até e realizamos o serviço se possível na hora.'
				),
			);
			foreach ($listaServices as $singleService) {
				?>
				<div class="col-md-4">
					<div class="single-detail">
						<div class="title-detail">
							<div class="icon-detail">
								<img src="<?php echo get_bloginfo('template_url') . '/img/icons/' . $singleService['img']; ?>" alt="" class="img-detail">
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
	</div>
</section>