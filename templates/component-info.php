<div class="component-contact">
    <div class="row">
        <div class="col-md-6 text-center py-3">
            <h3>E-mail</h3>
            <div class="contact-detail">
                <a href="<?php echo InfoVar::show('sendmail')?>" target="_blank"><p><?php echo InfoVar::show('email'); ?></p></a>
            </div>

        </div>
        <div class="col-md-6 text-center py-2">
            <h3>Telefone</h3>
            <div class="contact-detail">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo InfoVar::show('phone'); ?>" target="_blank"><p><i class="fas fa-phone"></i> <?php echo InfoVar::show('showphone'); ?></p></a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><p><i class="fab fa-whatsapp"></i> <?php echo InfoVar::show('showwhatsapp'); ?></p></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>