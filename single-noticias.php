<?php 
get_header(); 
?>
<main>
	<div class="container text-justify">
		<h1 class="mb-3"><?php echo get_the_title(); ?></h1>
		<div class="content-text">
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					/*
					if (has_post_thumbnail()) {
						?>
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="rounded float-md-right img-fluid my-2">
						<?php
					}
					*/
					the_content();
				}
			}
			?>
		</div>
		<hr class="mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="py-3">
					<h4>Compartilhe: </h4>
					<div class="addthis_inline_share_toolbox_xlfr"></div> 
				</div>
			</div>
			<div class="col-md-6 text-right">
				<div class="py-3">
					<a href="<?php echo get_post_type_archive_link('noticias'); ?>"><button type="button">Voltar Para Notícias</button></a>
				</div>
			</div>
		</div>

		<div class="comments-facebook py-3">
			<h4>Deixe seu comentário:</h4>
			<?php
			$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
			$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			?>
			<div class="fb-comments" data-href="<?php echo $url; ?>" data-width="100%" width="100%" data-numposts="10"></div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>