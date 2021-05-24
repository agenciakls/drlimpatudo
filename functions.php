<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'facebook' => '',
	'instagram' => '',
    'youtube' => '',

    'sendmail' => 'mailto:contato@realmaqbalancas.com.br',
    'email' => 'contato@realmaqbalancas.com.br',

    'whatsapp' => '(21) 3331-8840',
    'phone' => 'tel:',
    'showphone' => '(21) 3331-8840',
    'showphoneshort' => '3331-8840',
    'showmobile' => '(21) 3331-8840',
    
    'maps' => '',
    'location' => 'Rua Pedro Melo, 217 - Padre Miguel  - CEP: 21775410  Rio de Janeiro, RJ',
    
    'operation' => 'Seg. a Sex. : 8h às 19h | Sab. : 08h às 13h',

    'inicio' => 0,
    'higienizacao' => '76',
    'sanitizacao' => '63',
    'impermeabilizacao' => '72',
    'hidratacao' => '74',
);
InfoVar::save($argVar);
?>