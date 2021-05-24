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
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="content-section">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi magna felis, sollicitudin pulvinar ornare ut, molestie vitae tortor. Suspendisse facilisis ex non metus eleifend dignissim. Etiam imperdiet est vitae orci tincidunt lobortis ut aliquam orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer nec feugiat lorem, et lobortis augue. Donec et venenatis ipsum. Curabitur laoreet ac enim quis consequat. Nullam egestas ultricies mauris, ac hendrerit ligula sollicitudin vitae. Duis tincidunt interdum leo, ut cursus dolor tempor eget. Donec eu diam imperdiet, viverra ipsum vel, congue magna. Morbi molestie lorem mi.</p><br />
								<p>Nam accumsan leo nec orci tempus luctus. Praesent accumsan quis leo vel aliquam. Nulla facilisi. Suspendisse nec diam sed odio laoreet accumsan sit amet lacinia lectus. Phasellus venenatis diam id scelerisque sagittis. Integer id accumsan sem. Cras sit amet mauris et purus venenatis consequat. Fusce orci purus, blandit quis volutpat ac, pretium non mauris. Donec tristique lacinia turpis eu porttitor.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="about-figure">
						<div class="image-figure img-circle" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/img-biography.jpg');" alt="">
						</div>
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/img-biography.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</section>
		</div>
		<a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="button-secundary" type="button">Entre em contato</button></a>
	</div>
</main>
<?php get_footer(); ?>