<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'facebook' => 'https://www.facebook.com/realmaqbalancas/',

    'sendmail' => 'mailto:contato@realmaqbalancas.com.br',
    'email' => 'contato@realmaqbalancas.com.br',

    'whatsapp' => 'https://api.whatsapp.com/send/?phone=5521991779602&text&app_absent=0',
    'showwhatsapp' => '(21) 99177-9602',
    'phone' => 'tel:+552133318840',
    'showphone' => '(21) 3331-8840',
    
    'maps' => 'https://g.page/RealBalancas?share',
    'location' => 'Rua Pedro Melo, 217 - Padre Miguel  - CEP: 21775410  Rio de Janeiro, RJ',
    
    'operation' => 'Seg. a Sex. : 8h às 19h | Sab. : 08h às 13h',

    'inicio' => 15,

    'contato' => 22,
    'assistenciatecnica' => 38,

    'comercial' => 55,
    'plataforma' => 57,
    'mecanica' => 59,
    'antropometrica' => 61,
    'padaria' => 44,
    'acougue' => 49,
    'restaurantes' => 46,
    'supermercados' => 51,
    'hospitalares' => 53,

    'ga_ads' => '',
    'ga_analytics' => 'UA-139592394-1',
    'fb_app_id' => '',
    'fb_admins' => '',
    
);
InfoVar::save($argVar);
?>