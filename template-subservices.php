<?php 
/*
Template name: Subserviços
*/
get_header(); 
?>
<main>
	<div class="container">
		<h1 class="mb-3"><?php echo get_the_title(); ?></h1>
		<div class="content-text">
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					if (has_post_thumbnail()) {
						?>
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="rounded float-md-right img-fluid my-2">
						<?php
					}
					the_content();
				}
			}
			?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-secundary" type="button">Entre em contato</button></a>
			</div>
		</div>
	</div>
</main>
<?php 

get_template_part('templates/home', 'contact');
get_footer(); 
?>