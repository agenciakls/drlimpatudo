<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'facebook' => 'https://www.facebook.com/DrLimpaTudoRJ/',
	'instagram' => 'https://www.instagram.com/drlimpatudorj/',
    'youtube' => 'https://www.youtube.com/channel/UCvK1ARP6BQZ03c1XqBTxOAg?sub_confirmation=1',

    'sendmail' => 'mailto:contato@drlimpatudorj.com.br',
    'email' => 'contato@drlimpatudorj.com.br',

    'whatsapp' => 'https://api.whatsapp.com/send?phone=5521968302337&text=Ol%C3%A1!%20Vim%20pelo%20Site!',
    'phone' => 'tel:+552136138404',
    'showphone' => '(21) 3613-8404',
    'showphoneshort' => '3613-8404',
    'showmobile' => '(21) 96830-2337',

    
    'maps' => 'https://g.page/dr-limpa-tudo-rj?share',
    'location' => 'Barra da Tijuca - RJ',
    
    'operation' => 'Seg. - Sáb. 08:00 - 18:00',

    'inicio' => 0,
    'higienizacao' => '76',
    'sanitizacao' => '63',
    'impermeabilizacao' => '72',
    'hidratacao' => '74',
);
InfoVar::save($argVar);
?>