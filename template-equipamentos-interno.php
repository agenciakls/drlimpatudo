<?php 
/*
Template Name: Equipamentos (interno)
*/
get_header(); 
?>
<main class="page-equipamentos section">
	<?php
	if (have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<div class="list-equipamentos">
				<div id="store-list">
					<?php
						$equipamentos = get_field('equipamentos');
						if ($equipamentos) {
							foreach ($equipamentos as $equipamentoSingle) {
								?>
								<div class="box-equipamentos">
									<div class="container">
										<div class="row box-intern">
											<div class="img-area col-md-4">
												<?php
												if ($equipamentoSingle['imagem']) {
													?>
													<img src="<?php echo $equipamentoSingle['imagem']['url']; ?>" class="img-fluid img-circle" alt="">
													<?php 
												}
												?>
											</div>
											<div class="content col-md-8">
												<h1><?php echo $equipamentoSingle['titulo']; ?></h1>
												<?php echo $equipamentoSingle['conteudo']; ?>
												<div class="component-button-call gray my-3">
													<div class="row">
														<div class="col-md-6 text-center"><a href=""><div class="button-call"><div class="text">Chama a gente no WhatsApp</div><div class="icon"><img src="<?php echo get_bloginfo('template_url') . '/img/icons/whatsapp.png'; ?>" alt=""></div></div></a></div>
														<div class="col-md-6 text-center"><a href=""><div class="button-call"><div class="text">Fale direto com o técnico</div><div class="icon"><img src="<?php echo get_bloginfo('template_url') . '/img/icons/tecnico.png'; ?>" alt=""></div></div></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php 
							}
						}
					?>
				</div>
			</div>
			<?php
		}
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo get_template_part('templates/component', 'contato'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>