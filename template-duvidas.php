<?php 
/*
Template name: Dúvidas Frequentes
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-contact">
				<?php echo get_template_part('templates/component', 'info'); ?>
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						?>
						<div class="content-duvidas">
							<?php echo get_the_content(); ?>
						</div>
						<?php 
					}
				}
				?>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>