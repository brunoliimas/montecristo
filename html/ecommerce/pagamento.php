<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout-pag">

		<h1>PAGAMENTO</h1>
		<p class="subtitulo">Preencha os dados para concluir o seu pagamento</p>
		
		<div class="alert alert-danger js-checkout-erro" style="display:none"></div>
				
		<form id="formCheckout" method="POST" enctype="multipart/form-data" onsubmit="return false" action="<?php echo site_url('conta/pagar/'.$pedido->id) ?>">
		
			<input type="hidden" name="send" value="1" />
		
			<div class="col-1">
			
				<h2><?php print 'SEUS DADOS' ; ?></h2>
			
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td style="color:#996666; font-size:14px">
							
							<p><?php print "{$cadastro->nome} {$cadastro->sobrenome}" ?></p>
							<p><br>CPF <?php echo $cadastro->cpf ?>
							<br>RG <?php echo $cadastro->rg ?>
							<?php if($cadastro->sexo == 'M'): ?>
							<br>Masculino
							<?php endif; ?>
							<?php if($cadastro->sexo == 'F'): ?>
							<br>Feminino
							<?php endif; ?>
							</p>
							
							<br>
							<p>ENDEREÇO DE ENTREGA</p>
							<p>
							<?php echo $pedido->logradouro ?>, <?php echo $pedido->numero ?> <?php echo $pedido->complemento != '' ? ", {$pedido->complemento}" : '' ?>
							<br><?php echo $pedido->cep ?> - <?php echo $pedido->bairro ?>
							<br><?php echo $pedido->cidade ?>, <?php echo $pedido->uf ?>
							
						</td>
					</tr>
				</table>
			</div>
			
			<div class="col-2">

				<h2>FORMAS DE PAGAMENTO</h2>
				
				<table border="0" cellpadding="0" cellspacing="0" class="formas">
					<tr>
						<td style="width:20px !important"><?php echo form_radio('formapagamento', 'mastercard', true); ?></td>
						<td><img src="<?php echo base_url('img/mastercard.webp') ?>"></td>
						
						<td style="width:20px"><?php echo form_radio('formapagamento', 'visa'); ?></td>
						<td><img src="<?php echo base_url('img/visa.webp') ?>"></td>

                        <!--td style="width:20px; text-align:center"><?php echo form_radio('formapagamento', 'boleto'); ?></td>
                        <td><img src="<?php echo base_url('img/boleto.webp') ?>"></td-->

					</tr>
				</table>

                <table border="0" cellpadding="0" cellspacing="0" class="js-dados-cartao">

					<tr>
						<td colspan="2">
							<label for="nome_titular">Nome do titular do cartão*</label>
							<?php echo form_input('nome_titular', set_value('nome')); ?>	
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label for="numero_cartao">Número do cartão*</label>
							<?php echo form_input('numero_cartao', set_value('numero_cartao')); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="mes_validade">Data de validade*</label>
							<?php echo form_dropdown('mes_validade'
								,array(
									'01'=>'Janeiro'
									,'02'=>'Fevereiro'
									,'03'=>'Março'
									
									,'04'=>'Abril'
									,'05'=>'Maio'
									,'06'=>'Junho'
									
									
									,'07'=>'Julho'
									,'08'=>'Agosto'
									,'09'=>'Setembro'
									
									,'10'=>'Outubro'
									,'11'=>'Novembro'
									,'12'=>'Dezembro'
									
								), set_value('data_validade')); ?>	
						</td>
						<td>
							<label for="ano_validade">&nbsp;</label>
							<?php echo form_dropdown('ano_validade', arr_ano_validade(), set_value('ano_validade')); ?>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="rg">CVV*</label>
							<?php echo form_input('codigo_seguranca', set_value('codigo_seguranca')); ?>	
						</td>
						<td>
							<a href="#pesquisar-cep" class="js-cep">O que é isso?</a>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<label for="mes_validade">Opções de pagamento*</label>
							<?php echo form_dropdown('parcelas', @$parcelas, set_value('parcelas')); ?>	
						</td>
					</tr>
					
				</table>
						
			</div>
		
			<div class="col-3">
				<h2>SEU PEDIDO</h2>
				
				<table class="table table-resumo">
				
					<tr class="topo">
						<th>Itens</th>
						<th>Quantidade</th>
						<th>Valor</th>
					</tr>					
					<?php foreach ($this->db->select('pedidoitem.id, item.imagem, item.nome, pedidoitem.item_preco, pedidoitem.item_qtd, (pedidoitem.item_qtd*pedidoitem.item_preco) subtotal')
											->from('pedidoitem')
											->join('item', 'item.id = pedidoitem.item_id')
											->where('pedidoitem.pedido_id', $pedido->id)
											->get()->result() as $pedidoitem): ?>
					
					<tr>
						<td class="cart-img">
							<img src="<?php echo timthumb_url('admin/upload/item/'.$pedidoitem->imagem, '166', '127') ?>" alt="<?php echo $pedidoitem->nome ?>" />
                            <br>
                            <span class="s-nome"><?php echo $pedidoitem->nome ?></span> <br />
                            <?php foreach ($this->db->select('nome, valor')
                                               ->from('pedidoitemopcao')
                                               ->where('pedidoitemopcao.pedidoitem_id', $pedidoitem->id)
                                               ->get()->result() as $pedidoitemopcao): ?>

                                <br><b><?php echo $pedidoitemopcao->nome ?>:</b> <?php echo $pedidoitemopcao->valor ?>

                            <?php endforeach; ?>
						</td>
						<td>
							<span class="s-qtd"><?php echo $pedidoitem->item_qtd ?></span>
						</td>
                        <td class="nowrap">
							<span class="s-preco">R$ <?php echo $this->cart->format_number($pedidoitem->subtotal) ?></span>
						</td>
					</tr>
					<?php endforeach; ?>
					
					<tr class="footer">
						<td colspan="2">Número do pedido</td>
						<td style="text-align:left" class="nowrap"><strong><?php echo $pedido->id ?></strong></td>
					</tr>
					
					<tr class="footer">
						<td colspan="2">Sub-total</td>
						<td style="text-align:xcenter" class="nowrap"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_produtos) ?></strong></td>
					</tr>
					<tr class="footer">
						<td colspan="2">Frete</td>
						<td style="text-align:xcenter" class="nowrap"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_frete) ?></strong></td>
					</tr>
					<tr class="footer">
						<td colspan="2">Total</td>
						<td style="text-align:xcenter" class="nowrap"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_total) ?></strong></td>
					</tr>
					
				</table>
				
				<div style="text-align:right">
					<a href="#" class="btn js-fechar">REALIZAR PAGAMENTO</a>
				</div>

				<br /><br />
				<img src="<?php echo base_url('img/ico-seguranca.webp') ?>">
				
			</div>
		
		</form>
		
		<br clear="all" />
		<br>
		
	</div>
		
</section>


<script language="javascript">

	function apply_validate(){
	
		$('#formCheckout').validate({
			errorElement: 'span'
			,rules: {

                formapagamento: 'required'

                // Cartão de credito
                ,nome_titular:  {required:{depends: function(){ return is_cc() }}}
                ,numero_cartao: {required:{depends: function(){ return is_cc() }}, creditcard:{depends: function(){ return is_cc() }}}
                ,codigo_seguranca: {required:{depends: function(){ return is_cc() }}}

                // ,nome_titular: 'required'
                // ,numero_cartao: {required:true, creditcard:true}
                // ,codigo_seguranca: 'required'

                ,formaentrega_id: 'required'

			}
			,errorPlacement: function(error, element) {
				if (element.attr("name") == "bandeira") {
					error.insertAfter("#lastname");
				} 
				if (element.attr("name") == "formaentrega_id") {
					error.insertAfter(".frete-container-erro");
				} 
				else {
					error.insertAfter(element);
				}
			}
		});
	}

    function is_cc(){
        return $('input[name="formapagamento"]:checked').val() == 'visa'
            || $('input[name="formapagamento"]:checked').val() == 'mastercard'
            || $('input[name="formapagamento"]:checked').val() == 'amex';
    }
	
	$(document).ready(function(){
	
		$(".fancybox").fancybox({ wrapCSS: 'checkout' });
		$("input[name='numero_cartao']").mask('?9999-9999-9999-9999');

		apply_validate();
		
		$('#formCheckout').ajaxForm({
			success: function(out) {
			
				if(!out.status){
					$('.js-checkout-erro').html(out.msg);
					$('.js-checkout-erro').fadeIn();
					$('.js-fechar').html('FECHAR PEDIDO');
				}
				else {
					alert(out.msg);
					window.location.href = out.redirect;
				}
			}
			,error: function(out, error, msg){
				alert(out.msg);
			}
			,beforeSubmit: function(){
				$('.js-checkout').html('Aguarde ...');
				$('.js-checkout-erro').fadeOut();
				return $('#formCheckout').valid();
			}
			,complete: function(){
				$.fancybox.close();
			}
			,dataType: 'json'
			,resetForm: false
		});
		
		$('.js-fechar').bind('click', function(){

			if(!$('#formCheckout').valid()){ 
				return false;
			}
		
			loadExec( 
				function(){$('#formCheckout').submit();} 	
			);
			
			return false;
		});

        $('input[name="formapagamento"]').bind('click', function(){

            if($('input[name="formapagamento"]:checked').val() == 'boleto' ){
                $('.js-dados-cartao').slideUp('slow');
            }
            else {
                $('.js-dados-cartao').slideDown('slow');
            }

        });
						
	});
	
</script>
<?php require_once APPPATH.'views/html/footer.php' ?>