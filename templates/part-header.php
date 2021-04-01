<header>
	<div class="header-area">
		<div class="header-background<?php if (!is_front_page()) { echo ' front-header'; } ?>"></div>
		<div class="header-main">
			<div class="container">
				<div class="logo">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
				</div>
				<div class="nav-button">
					<div class="hamburger hamburger--squeeze">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				
				<nav>
					<?php 
					if (has_nav_menu('principal')) {
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
				</nav>
				<div class="pos-header">
					<div id="pre-socials-container" class="pre-socials-container">
						<ul id="pre-list-ul" class="pre-header-list">
							<li id="nav-menu-item-6">
								<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
							<li id="nav-menu-item-6">
								<a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li id="nav-menu-item-6">
								<a href="<?php echo InfoVar::show('youtube'); ?>" target="blank" class="menu-link main-menu-link">
									<i class="fab fa-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
					<div id="pre-list-container" class="header-buttons">
						<div class="header-list-buttons">
							<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank">
								<button class="button-whatsapp" type="button">
									<i class="fab fa-whatsapp"></i> Mande um WhatsApp
								</button>
							</a>
							<a href="<?php echo InfoVar::show('phone'); ?>" target="_blank">
								<button class="button-call" type="button">
									<i class="fas fa-phone"></i> Ou Ligue <?php echo InfoVar::show('showphoneshort'); ?>
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="header-bar">
	<?php 
	if (has_nav_menu('menumobile')) {
		wp_nav_menu( 
			array( 
				'theme_location' => 'menumobile', 
				'menu_class' => 'header-menu',
				'menu_id' => 'header-nav',
				'container_class' => 'menu-principal-header', 
				'container_id' => 'menu-principal-header' ,
				'walker' => new OrganizacaoMenuPrincipal()
			) 
		);
	}
	?>
	<div id="pre-socials-container" class="pre-socials-container">
		<ul id="pre-list-ul" class="pre-header-list">
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('youtube'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>