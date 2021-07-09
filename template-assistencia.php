<?php 
/*
Template Name: Assistência Técnica
*/
get_header(); 
?>
<main class="page-assistencias section">
    
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <?php
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        ?>
                        <div class="list-assistencias">
                            <div id="store-list">
                                <?php
                                    $assistencias = get_field('assistencias');
                                    if ($assistencias) {
                                        foreach ($assistencias as $assistenciaSingle) {
                                            ?>
                                            <div class="box-assistencias">
                                                <div class="row box-intern">
                                                    <div class="img-area col-md-3">
                                                        <?php
                                                        if ($assistenciaSingle['imagem']) {
                                                            ?>
                                                            <img src="<?php echo $assistenciaSingle['imagem']['url']; ?>" class="img-fluid img-circle" alt="">
                                                            <?php 
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="content col-md-9">
                                                        <h1><?php echo $assistenciaSingle['titulo']; ?></h1>
                                                        <?php
                                                        if ($assistenciaSingle['balanca']) {
                                                            ?>
                                                            <h3>Balança</h3>
                                                            <p><?php echo $assistenciaSingle['balanca']; ?></p>
                                                            <?php
                                                        }
                                                        if ($assistenciaSingle['equipamentos']) {
                                                            ?>
                                                            <h3>Equipamentos</h3>
                                                            <p><?php echo $assistenciaSingle['equipamentos']; ?></p>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php echo $assistenciaSingle['conteudo']; ?>
                                                        <div class="component-button-call my-3">
                                                            <div class="row">
                                                                <div class="col-md-6 text-center"><a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><div class="button-call"><div class="text">Chama a gente no WhatsApp</div><div class="icon"><img src="<?php echo get_bloginfo('template_url') . '/img/icons/whatsapp.png'; ?>" alt=""></div></div></a></div>
                                                                <div class="col-md-6 text-center"><a href="<?php echo InfoVar::show('phone'); ?>" target="_blank"><div class="button-call"><div class="text">Fale direto com o técnico</div><div class="icon"><img src="<?php echo get_bloginfo('template_url') . '/img/icons/tecnico.png'; ?>" alt=""></div></div></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>  
				<?php echo get_template_part('templates/component', 'contato'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>