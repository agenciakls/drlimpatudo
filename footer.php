    <?php get_template_part('templates/footer', 'detail'); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-2 d-none d-md-block footer-data">
					<div class="element-footer">
						<h3>Menu</h3>
						<div class="footer-site">
						<?php 
						if (has_nav_menu( 'principal' )) {
							wp_nav_menu( 
								array( 
									'theme_location' => 'principal', 
									'menu_class' => 'header-menu',
									'menu_id' => 'header-nav',
									'container_class' => 'menu-principal-header', 
									'container_id' => 'menu-principal-header' ,
									'walker' => new OrganizacaoMenuPrincipal()
								) 
							);
						}
						?>
						</div>
					</div>
				</div>
				
				<div class="col-md-2 d-none d-md-block footer-data">
					<div class="element-footer">
						<h3>Menu</h3>
						<div class="footer-site">
						<?php 
						if (has_nav_menu( 'principal' )) {
							wp_nav_menu( 
								array( 
									'theme_location' => 'principal', 
									'menu_class' => 'header-menu',
									'menu_id' => 'header-nav',
									'container_class' => 'menu-principal-header', 
									'container_id' => 'menu-principal-header' ,
									'walker' => new OrganizacaoMenuPrincipal()
								) 
							);
						}
						?>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-about">
					<div class="element-footer list-contact">
						<h3>FUNCIONAMENTO</h3>
						<a href="<?php echo InfoVar::show('maps'); ?>" target="_blank">
							<div class="footer-contact">
								<i class="fas fa-map-marker-alt"></i> <?php echo InfoVar::show('location'); ?>
							</div>
						</a>
						<a href="<?php echo InfoVar::show('phone'); ?>" target="_blank">
							<div class="footer-contact">
								<i class="fas fa-phone"></i> <?php echo InfoVar::show('showphone'); ?> / <?php echo InfoVar::show('showmobile'); ?>
							</div>
						</a>
						<a href="<?php echo InfoVar::show('sendmail'); ?>" target="_blank">
							<div class="footer-contact">
								<i class="fas fa-envelope"></i> <?php echo InfoVar::show('email'); ?>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="logo-footer">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="" class="img-footer img-fluid">
					</div>
					<div class="element-footer">
						<h3 class="title-socials">Redes Sociais</h3>
						<div class="footer-site">
							<div class="list-socials">
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank">
										<i class="fab fa-facebook-square fa-2x"></i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank">
										<i class="fab fa-instagram fa-2x"></i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('youtube'); ?>" target="_blank">
										<i class="fab fa-youtube fa-2x"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<?php
	if (is_front_page()) {
		?>
		<!-- BOOTSTRAP -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<?php
	}
	?>

    <!-- FUNCTIONS -->
    <script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.21"></script>
	<?php if (is_front_page()) { ?><script src="<?php bloginfo('template_url'); ?>/js/home.js?v=1.1.2"></script><?php }?>

	<!-- GOOGLE ADS -->
	<script>
	function gtag_report_conversion() {
		gtag('event', 'conversion', { 'send_to': 'AW-687319088/zqXhCOad_rcBELDQ3scC', 'event_category': 'Compra', 'event_label': 'Dr Limpa Tudo', 'value': 1, 'currency': 'USD', });
	}
	function gaGoogle(categoria = 'contato') {
		gtag('event', 'contato', { 'event_category': categoria, 'event_label': 'Entrar em Contato', 'value': 1 });
	}
	$('.button-primary').on('click', function () { gaGoogle('site'); gtag_report_conversion(); });
	$('.button-secundary').on('click', function () { gaGoogle('site'); gtag_report_conversion(); });
	$('.button-contato').on('click', function () { gaGoogle('formulario'); gtag_report_conversion(); });
	$('.button-whatsapp').on('click', function () { gaGoogle('whatsapp'); gtag_report_conversion(); });
	$('.button-call').on('click', function () { gaGoogle('ligacao'); gtag_report_conversion(); });
	$('.action-info').on('click', function () { gaGoogle('info'); gtag_report_conversion(); });
	</script>

    <?php wp_footer(); ?>
</body>
</html>