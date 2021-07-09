<?php 
/*
Template Name: Institucional
*/
get_header(); 
?>
<main class="page-institucional section">
	<div class="container">
		<div class="row box-institucional">

			<div class="single-institucional d-flex justify-content-center align-items-center" id="entrega">
				<div class="col-md-5"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/institucional-entrega.png" class="img-fluid" alt=""></div>
				<div class="col-md-7">
					<h3 class="title-institucional">NÓS VAMOS ATÉ VOCÊ!</h3>
					<p>Nossa equipe vai até o local do equipamento para realizar o conserto ou recolher para oficina caso o serviços precise de mais recursos. Nós buscamos e entregamos no local.</p>
				</div>
			</div>

			<div class="single-institucional d-flex justify-content-center align-items-center" id="">
				<div class="col-md-5"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/institucional-inmetro.png" class="img-fluid" alt=""></div>
				<div class="col-md-7">
					<h3 class="title-institucional">CREDENCIAMENTO - INMETRO</h3>
					<p>A RMB é uma empresa qualificada e credenciada pelo INMETRO que permite realizar conserto e aferições em balanças no Estado do Rio de Janeiro.</p>
				</div>
			</div>

			<div class="single-institucional d-flex justify-content-center align-items-center">
				<div class="col-md-5"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/institucional-tecnicos.png" class="img-fluid" alt=""></div>
				<div class="col-md-7">
					<h3 class="title-institucional">TÉCNICOS QUALIFICADOS</h3>
					<p>Com experiência há mais de 20 anos, nossos técnicos possuem formação no SENAC em conserto de maquinário com motor, é ex-técnico da Filizola, além de um engenheiro elétrico. Certificado e credenciado no INMETRO.</p>
				</div>
			</div>

			<div class="single-institucional d-flex justify-content-center align-items-center">
				<div class="col-md-5"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/institucional-seguranca.png" class="img-fluid" alt=""></div>
				<div class="col-md-7">
					<h3 class="title-institucional">SEGURANÇA E TRANQUILIDADE</h3>
					<p>Nossos serviços incluem a ida do técnico até o local. Trabalhamos com Nota Fiscal Carioca, garantia garantida por três meses, além da selar e lacrar a balança tudo em conformidade com o Inmetro e registrado.</p>
				</div>
			</div>

		</div>
	</div>
	
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