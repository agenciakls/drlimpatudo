<section class="section section-info">
	<div class="container">
		<div class="row">
			<div class="single-info col-md-4">
				<div class="icon-info">
					<i class="fas fa-phone"></i>
				</div>
				<div class="content-info">
					<div class="title-info">
						TELEFONE E SUPORTE
					</div>
					<div class="data-info">
						<a href="<?php echo InfoVar::show('phone'); ?>" class="action-info" target="_blank"><?php echo InfoVar::show('showphone'); ?></a> / <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="action-info" target="_blank"><?php echo InfoVar::show('showmobile'); ?></a>
					</div>
				</div>
			</div>
			
			<div class="single-info col-md-4">
				<div class="icon-info">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="content-info">
					<div class="title-info">
						LOCALIDADE
					</div>
					<div class="data-info">
						<a href="<?php echo InfoVar::show('maps'); ?>" class="action-info" target="_blank"><?php echo InfoVar::show('location'); ?></a>
					</div>
				</div>
			</div>
			
			<div class="single-info col-md-4">
				<div class="icon-info">
					<i class="far fa-clock"></i>
				</div>
				<div class="content-info">
					<div class="title-info">
						HORÁRIO DE FUNCIONAMENTO
					</div>
					<div class="data-info">
						<?php echo InfoVar::show('operation'); ?>
					</div>
				</div>
            </div>
		</div>
	</div>
</section>