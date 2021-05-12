<section class="pos-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
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
			</div>
		</div>
	</div>
</section>