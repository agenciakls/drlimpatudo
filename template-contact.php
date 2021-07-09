<?php 
/*
Template name: Contato
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-contact">
			<?php echo get_template_part('templates/component', 'info'); ?>
			<?php echo get_template_part('templates/component', 'buttons'); ?>
				<h3>ENDEREÇO</h3>
				<p>Rua Pedro Melo, 217 - Padre Miguel - CEP: 21775410  Rio de Janeiro, RJ</p>
				<div class="embed-responsive my-3 embed-responsive-21by9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.8304252480652!2d-43.44440028503482!3d-22.882721785024085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdf79c620deab%3A0xf53f591cbd71e54b!2sRua%20Pedro%20de%20Mello%2C%20217%20-%20Padre%20Miguel%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021775-410!5e0!3m2!1spt-BR!2sbr!4v1622105492360!5m2!1spt-BR!2sbr" width="600" height="450" class="embed-responsive-item" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<?php echo get_template_part('templates/component', 'contato'); ?>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>