<?php 
/*
Template name: Impermeabilização 
*/
get_header(); 
?>
<main>
	<section class="landing-resume">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/sofa_higienizado.png" alt="" class="img-single">
				</div>
				<div class="col-md-6">
					<div class="resume-text">O processo de impermeabilização consiste na aplicação de produtos específicos para cada tipo de superfície com o objetivo de criar uma camada de proteção contra ação da água e umidade.</div>
					<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-primary btn-resume" type="button">Eu Quero</button></a>
				</div>
			</div>
		</div>
	</section>
	<section class="landing-services">
		<div class="container">
			<h3 class="service-head">Detalhes</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="single-service">
						<div class="service-icon">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/icon-impermeabilizacao.png" width="60" alt="">
						</div>
						<div class="service-title">IMPERMEABILIZAÇÃO</div>
						<div class="service-text">Aplicamos um produto sobre o tecido que cria uma camada que protege contra a ação da água, líquidos e umidade, possibilitando o aumento da vida útil do estofado.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-service">
						<div class="service-icon">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/icoon-sofa.png" width="60" alt="">
						</div>
						<div class="service-title">HIGIENIZAÇÃO</div>
						<div class="service-text">É um processo de lavagem a seco que permite a limpeza completa do estofado, eliminando bactérias, fungos e sujeiras, deixando ele com aparência de novo e com um cheirinho agradável.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-service">
						<div class="service-icon">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/icon-sofa.png" width="60" alt="">
						</div>
						<div class="service-title">HIDRATAÇÃO DE COURO</div>
						<div class="service-text">Tratamento com shampoo especial que age profundamente nas fibras do couro renovando o brilho e deixando limpo. Também protege da luz solar, que resseca e queima o estofado.</div>
					</div>
				</div>
			</div>
			<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-primary" type="button">Entre em contato</button></a>
		</div>
	</section>
	<?php get_template_part('templates/home', 'contact'); ?>
	<section class="landing-atendimento">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-4 col-md-3">
					<h3 class="atendimento-head">Atendimento a Domicílio</h3>
					<div class="atendimento-text">
						Entre em contato conosco para fazer o seu orçamento e nós agendamos uma visita do técnico em sua casa
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<div class="row">
						<div class="col-md-4">
							<div class="atendimento-box">
								<div class="atendimento-icon">
									<i class="far fa-clock"></i>
								</div>
								<div class="atendimento-title">
									Horário de Funcionamento
								</div>
								<div class="atendimento-text">
									<div class="atendimento-space">
										<p>Segunda a Sexta</p>
										<p>08:00 às 18:00</p>
									</div>
									<div class="atendimento-space">
										<p>Sábado</p>
										<p>08:00 às 16:00</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="atendimento-box">
								<div class="atendimento-icon">
									<i class="fab fa-whatsapp"></i>
								</div>
								<div class="atendimento-title">
									Telefone e Whatsapp
								</div>
								<div class="atendimento-text">
									<div class="atendimento-space">
										<p>Entre em contato conosco e tire todas as dúvidas</p>
									</div>
									<div class="atendimento-space">
										<div class="atendimento-link"><a href="<?php echo InfoVar::show('phone'); ?>" target="_blank"><?php echo InfoVar::show('showphone'); ?></a></div>
										<div class="atendimento-link"><a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><?php echo InfoVar::show('showmobile'); ?></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="atendimento-box">
								<div class="atendimento-icon">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="atendimento-title">
									Forma de pagamento
								</div>
								<div class="atendimento-text">
								
									<div class="atendimento-space">
										<p>Faça seu pagamento em dinheiro, cartão de débito ou crédito.</p>
									</div>
									<div class="atendimento-space">
										<p>Parcele em até 3x sem juros!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="landing-clients">
		<div class="container">
			<h3 class="clients-head">Clientes</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="clients-list">
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/globo.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/gnt.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/sbt.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/mercure.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/ibis.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/sheraton.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/atitude.png" alt="" class="img-single">
						</div>
						<div class="img-clients">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/parceiros/supergasbras.png" alt="" class="img-single">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="landing-portfolio">
		<div class="container">
			<h3 class="portfolio-head">Portfólio</h3>
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="portfolio-single"><img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/portfolio_1.jpg" class="img-fluid rounded" alt=""></div>
				</div>
				<div class="col-md-3 col-6">
					<div class="portfolio-single"><img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/portfolio_2.jpg" class="img-fluid rounded" alt=""></div>
				</div>
				<div class="col-md-3 col-6">
					<div class="portfolio-single"><img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/portfolio_4.jpg" class="img-fluid rounded" alt=""></div>
				</div>
				<div class="col-md-3 col-6">
					<div class="portfolio-single"><img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/higienizacao/portfolio_5.jpg" class="img-fluid rounded" alt=""></div>
				</div>
			</div>
			<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-primary" type="button">Eu Quero</button></a>
		</div>
	</section>
</main>
<?php
get_footer(); 
?>