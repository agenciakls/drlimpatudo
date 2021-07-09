<?php 
/*
Template Name: Sobre
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
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="content-section">
										<?php echo get_the_content(); ?>
									</div>
								</div>
							</div>
						</div>
						
						<?php if (has_post_thumbnail()) {
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
					</section>
					<?php
				}
			}
			?>

		</div>
	</div>
</main>
<?php get_footer(); ?>