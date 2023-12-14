<?php if (empty($_SESSION['MODAL_BONUS'])) :?>
<div class="modal-bonus" id="modal-bonus">
    <div class="modal-content">
        <img class="bonus-img" src="<?php echo base_url('img/acao-bonus.webp') ?>" alt="Ação Bônus">
        <img class="bonus-close" id="bonus-close" src="<?php echo base_url('img/close.png') ?>" alt="Fechar">
    </div>
</div>
<?php endif;?>