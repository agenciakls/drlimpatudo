<?php 
/* MENU PRINCIPAL */
function menuPrincipal() {
    register_nav_menu('principal', __('Menu Principal', 'theme-slug'));
}
add_action('after_setup_theme', 'menuPrincipal');

function menuMobile() {
	register_nav_menu('menumobile', __('Menu Mobile', 'theme-slug'));
}
add_action('after_setup_theme', 'menuMobile');


function menuFooterPrincipal() {
	register_nav_menu('footerPrincipal', __('Footer Principal', 'theme-slug'));
}
add_action('after_setup_theme', 'menuFooterPrincipal');

function menuFooterSecundario() {
	register_nav_menu('footerSecundario', __('Footer Secundário', 'theme-slug'));
}
add_action('after_setup_theme', 'menuFooterSecundario');

function menuPreHeader() {
	register_nav_menu('premenu', __('Pré Header', 'theme-slug'));
}
add_action('after_setup_theme', 'menuPreHeader');
?>