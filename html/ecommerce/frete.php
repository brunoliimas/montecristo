<table border="0" cellpadding="0" cellspacing="0" class="table entregas js-formaentrega">
<?php foreach(@$opcoes_entrega as $opcao_entrega):?>
<?php $opcao_entrega = (object) $opcao_entrega; ?>
<tr>
	<td style="width:20px !important"><?php echo form_radio('formaentrega_id', $opcao_entrega->id, $this->cart->formaentrega_id()==$opcao_entrega->id); ?></td>
	<td style="white-space:nowrap !important"><?php echo $opcao_entrega->descricao ; ?></td>
	<?php if($opcao_entrega->valor>0): ?>
	<td style="white-space:nowrap !important">R$ <?php echo $this->cart->format_number(floatval($opcao_entrega->valor)) ; ?></td>
	<?php else: ?>
	<td>&nbsp;</td>
	<?php endif;?>
	<td style="white-space:nowrap !important"><?php echo $opcao_entrega->prazo_txt ; ?></td>
</tr>
<?php endforeach;?>
</table>