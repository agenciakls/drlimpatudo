<?php 
/*
Template Name: Sobre
*/
get_header(); 
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography">
			<section class="row">
				<div class="col-md-6">
					<div class="about-figure">
						<div class="image-figure img-circle" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/img-biography.jpg');" alt="">
						</div>
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/img-biography.jpg" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="title-section">
								<h3>
									Dr Limpa Tudo
								</h3>
							</div>
						</div>
						<div class="col-md-12">
							<div class="content-section">
								<p>O Dr Limpa Tudo foi criado com o objetivo de acabar com os inimigos do seus móveis e levar para sua casa bem estar, conforto, limpeza, qualidade de vida! O Dr Limpa tudo acredita que um ambiente limpo, higienizado e bem conservado é muito mais prazeroso de se viver, muito mais confortável e propício à busca da felicidade. Traz também paz de espírito e tranquilidade para todos!</p>
						</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-secundary" type="button">Entre em contato</button></a>
	</div>
</main>
<?php get_footer(); ?>