<?php 
/*
Template Name: Balanças
*/
get_header(); 
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography">
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
						</div>
					</section>
					<?php
				}
			}
			?>
			<section class="section-services">
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
			</section>
		</div>
	</div>
</main>
<?php get_footer(); ?>