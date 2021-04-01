<?php 
function mailContact($id) {
    global $wpdb;
    $contactList = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM form_contact WHERE id='%s'",
            $id
        )
    );
    $quantityContact = count($contactList);
    if ($quantityContact == 1) {
        $contactCurrent = $contactList[0];

        $nameSubject = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM form_contact_subject WHERE id='%s'",
                 $contactCurrent->subject_id
            )
        );

        $contentBook = '';
        $contentBook .= '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Super Compras</title>
        </head>
        <body>
        <div style="font-size: 18px; font-family: \'Arial\', \'trebuchet MS\'; margin: 15px auto; width: 600px; " width="600">
            <div align="center">
                <img src="http://www.redesupercompras.com/wp-content/themes/supercompras/img/logo.png" width="150" height="40" style="width: 150px; height: 40;" alt="RIO OGC">
                <h2 style=" text-transform: uppercase;">Contato Recebido</h2>
            </div>
            <div>
                <div>
                    <h3>Contato</h3>
                    <table style="box-sizing: border-box; width: 100%;">
                        <tr>
                            <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #00a056; color: #efefef; width: 120px !important; text-align: right"><strong>Nome</strong></td>
                            <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' . $contactCurrent->name . '</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #00a056; color: #efefef; width: 120px !important; text-align: right"><strong>E-mail</strong></td>
                            <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' .  $contactCurrent->email . '</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #00a056; color: #efefef; width: 120px !important; text-align: right"><strong>Telefone</strong></td>
                            <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' .  $contactCurrent->phone . '</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #00a056; color: #efefef; width: 120px !important; text-align: right"><strong>Assunto</strong></td>
                            <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' .  $nameSubject[0]->name . '</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; font-size: 18px; word-wrap: break-word; background-color: #00a056; color: #efefef; width: 120px !important; text-align: right"><strong>Mensagem</strong></td>
                            <td style="padding: 10px 15px; background-color: #dedede; font-size: 18px; word-wrap: break-word;">' .  $contactCurrent->message . '</td>
                        </tr>
                    </table>
                    <p>O envio foi feito no dia ' .  strftime("%d/%m/%Y às %H:%M", strtotime($contactCurrent->date_created)) . '</p>
                </div>
            </div>
        </div>
        </body>
        </html>
        ';
        $destinatario = array('contato@redesupercompras.com');
        $assunto = 'Contato - SuperCompras';
        $headers = array(
            'Content-Type: text/html; charset=UTF-8'
        );
        define('WP_USE_THEMES', false);
        require(ABSPATH . 'wp-load.php');

        wp_mail($destinatario, $assunto, $contentBook, $headers);
    }
}
?>