<?php 
/*
Template Name: Balanças (interno)
*/
get_header(); 
?>
<main class="page-balancas section">
	<div class="container">
		<div class="box-balancas">
			<?php
			if (have_posts()) {
				while(have_posts()) {
					the_post();
					?>
					<section class="row">
						
						<?php 
						if (has_post_thumbnail()) {
							?>
							<div class="col-md-12">
								<div class="about-figure">
									<div class="image-figure img-circle" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');" alt="">
									</div>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
								</div>
							</div>
							<?php
						}
						?>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="content-section">
										<?php echo get_the_content(); ?>
									</div>
								</div>
							</div>
							<div class="list-balancas row d-flex justify-content-center">
								<?php
									$balancas = get_field('balancas');
									if ($balancas) {
										foreach ($balancas as $balancaSingle) {
											?>
											<div class="col-md-3 col-6">
												<div class="img-area">
													<?php
													if ($balancaSingle['imagem']) {
														?>
														<img src="<?php echo $balancaSingle['imagem']['url']; ?>" class="img-fluid img-circle" alt="">
														<?php 
													}
													?>
												</div>
											</div>
											<?php 
										}
									}
								?>
							</div>
						</div>
					</section>
					<?php
				}
			}
			?>
		</div>
	</div>
	<?php echo get_template_part('templates/component', 'brands'); ?>
	<?php echo get_template_part('templates/component', 'buttons'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo get_template_part('templates/component', 'contato'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>