<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- TÍTULO -->
    <title><?php echo wp_title('-'); ?></title>

    <!-- META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>

    <!-- ESTILOS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" async>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?v=1.0.5" async>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet" async>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/fontawesome.min.css" >
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/all.min.css" >
	<?php
	if (is_front_page()) {
		?>
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" async>
		<?php
	}
	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_url'); ?>/img/favicon.png"> 
	<?php 
	if (InfoVar::show('ga_analytics')) {
		?>
		<!-- Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo InfoVar::show('ga_analytics'); ?>"></script>
		<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', '<?php echo InfoVar::show('ga_analytics'); ?>'); </script>
		<?php
	}
	if (InfoVar::show('ga_ads')) {
		?>
		<!-- Google Ads-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo InfoVar::show('ga_ads'); ?>"></script>
		<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', '<?php echo InfoVar::show('ga_ads'); ?>'); </script>
		<?php
	}
	if (InfoVar::show('fb_app_id') && InfoVar::show('fb_admins')) {
		?>
		
		<!-- Facebook -->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=<?php echo InfoVar::show('fb_app_id'); ?>&autoLogAppEvents=1" nonce="b4ioWcSu"></script>
		<meta property="fb:app_id" content="<?php echo InfoVar::show('fb_app_id'); ?>" />
		<meta property="fb:admins" content="<?php echo InfoVar::show('fb_admins'); ?>"/>
		<?php
	}
	?>

	
	<!-- SCHEMA -->
	<script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "Organization", "name" : "Dr Limpa Tudo", "url" : "https://www.drlimpatudorj.com.br", "sameAs" : [ "https://www.facebook.com/DrLimpaTudoRJ/", "https://www.instagram.com/drlimpatudorj/", "https://www.youtube.com/channel/UCvK1ARP6BQZ03c1XqBTxOAg?sub_confirmation=1",  ], "address": { "@type": "PostalAddress", "streetAddress": "Av. Alm. Júlio de Sá Bierrenbach, 65 - Bloco 1, Sala 320 - Barra da Tijuca, Rio de Janeiro - RJ, 22775-028", "addressRegion": "CA", "postalCode": "22775028", "addressCountry": "BR" } } </script>

	<?php 
	if (is_single() || is_page()) {
		$postCurrent = get_post(get_the_id());
		?>
		<meta name="description" content="<?php echo $postCurrent->post_excerpt; ?>">
		<meta name="keywords" content="<?php echo wp_title('-'); ?>">
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="<?php echo get_the_permalink(); ?>">
		<meta property="og:title" content="<?php echo wp_title('-'); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:description" content="<?php echo $postCurrent->post_excerpt; ?>">
		<?php 
		if (get_the_post_thumbnail()) {
			$idThumbnail = get_post_thumbnail_id(get_the_id());
			$imageData = wp_get_attachment_image_src($idThumbnail, 'medium_large');
			?>
			<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_id(), 'thumbnail'); ?>">
			<meta property="og:image:type" content="image/jpeg">
			<meta property="og:image:width" content="<?php echo $imageData[1]; ?>">
			<meta property="og:image:height" content="<?php echo $imageData[2]; ?>">
			<?php 
		}
		?>
		<meta property="og:type" content="website">
		<meta property="og:type" content="article">
		<meta property="article:published_time" content="<?php echo get_the_date(); ?>">
		<?php  
	}
	wp_head();
	?>
</head>
<body>
	<?php get_template_part('templates/part', 'pre-header'); ?>
	<?php get_template_part('templates/part', 'header'); ?>
	<?php get_template_part('templates/part', 'pos-header'); ?>
	<?php if (is_front_page()) { get_template_part('templates/home', 'banner'); } else { get_template_part('templates/header', 'title'); } ?>
	