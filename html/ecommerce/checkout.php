<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout-pag">

		<h1>PAGAMENTO</h1>
		<p class="subtitulo">Preencha os dados para concluir o seu pedido</p>
		
		<div class="alert alert-danger js-checkout-erro" style="display:none"></div>
		
		<?php if(!$logged): ?>
		<div class="ecom-japossui">	
			<br>
			<a href="#page-login" class="btn fancybox">Já possui cadastro, clique aqui</a>
		</div>
		<form class="simpleFormCheckout" id="page-login" style="display:none">
			<div class="alert alert-danger js-login-checkout-erro" style="display:none"></div>
			<p>JÁ SOU CADASTRADO</p>
			<input type="hidden" name="modo" value="checkout"/>
			<input type="text" placeholder="E-mail" name="login" autocomplete="off" />
			<input type="password" placeholder="Senha" name="senha" autocomplete="off" />
			<button type="button" class="js-entrar-checkout">Enviar</button>
			<br clear="all">
			<br clear="all">
			<a href="<?php echo site_url('conta/cadastro') ?>" class="cadastrar">Quero me cadastrar</a> 
			<a href="<?php echo site_url('conta/senha') ?>" class="senha">Esqueci a senha</a>
			<br>
		</form>
		<?php endif; ?>
		
		<form id="formCheckout" method="POST" enctype="multipart/form-data" onsubmit="return false" action="<?php echo site_url('carrinho/pagamento') ?>">
		
			<input type="hidden" name="send" value="1" />
		
			<div class="col-1">
			
				<h2><?php print !$logged ? 'CADASTRO NOVO USUÁRIO' : 'SEUS DADOS' ; ?></h2>
			
				<table border="0" cellpadding="0" cellspacing="0">

					<tr>
						<td>
							<label for="nome">Nome*</label>
							<?php echo form_input('nome', @$cadastro->nome); ?>
						</td>
						<td>
							<label for="sobrenome">Sobrenome*</label>
							<?php echo form_input('sobrenome', @$cadastro->sobrenome); ?>	
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="sexo">Sexo*</label>
							<?php if($logged):?>
							<?php echo form_radio('sexo', 'M', $cadastro->sexo=='M') . ' Mas ' ?>
							<?php echo form_radio('sexo', 'F', $cadastro->sexo=='F') . ' Fem ' ?>
							<?php else:?>
							<?php echo form_radio('sexo', 'M', TRUE) . ' Mas ' ?>
							<?php echo form_radio('sexo', 'F') . ' Fem ' ?>
							<?php endif;?>
						</td>
						<td>
							<label for="data_nascimento">Data de nascimento*</label>
							<?php echo form_input('data_nascimento', mysql_to_datebr(@$cadastro->data_nascimento)); ?>	
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<label for="nome">email*</label>
							<?php echo form_input('email', @$cadastro->email); ?>	
						</td>
					</tr>
					<?php if (!@$logged):?>
					<tr>
						<td>
							<label for="nome">Senha*</label>
							<?php echo form_password('senha', set_value('senha')); ?>
						</td>
						<td>
							<label for="senha_confirma">Confirmar Senha*</label>
							<?php echo form_password('senha_confirma', set_value('senha_confirma')); ?>
						</td>
					</tr>
					<?php endif;?>
					<tr>
						<td>
							<label for="rg">RG*</label>
							<?php echo form_input('rg', @$cadastro->rg); ?>
						</td>
						<td>
							<label for="cpf">CPF*</label>
							<?php echo form_input('cpf', @$cadastro->cpf, 'class="js-cpf"'); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="fone_res">Telefone*</label>
							<?php echo form_input('fone_res', @$cadastro->fone_res, 'class="js-fone"'); ?>	
						</td>
						<td>
							<label for="cpf">Celular*</label>
							<?php echo form_input('fone_cel', @$cadastro->fone_cel, 'class="js-fone"'); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="cep">CEP*</label>
							<?php echo form_input('cep', @$cadastro->cep, 'class="js-cep"'); ?>	
						</td>
						<td>
							<!--a href="#pesquisar-cep" class="js-cep">Não sabe o CEP?</a-->
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label for="endereco">Endereço*</label>
							<?php echo form_input('logradouro', @$cadastro->logradouro); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="numero">Número*</label>
							<?php echo form_input('numero', @$cadastro->numero); ?>	
						</td>
						<td>
							<label for="complemento">Complemento</label>
							<?php echo form_input('complemento', @$cadastro->complemento); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="bairro">Bairro*</label>
							<?php echo form_input('bairro', @$cadastro->bairro); ?>	
						</td>
						<td>
							<label for="cidade">Cidade*</label>
							<?php echo form_input('cidade', @$cadastro->cidade); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="uf">Estado*</label>
							<?php echo form_input('uf', @$cadastro->uf); ?>
						</td>
						<td>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							<?php echo form_checkbox('enviar_outro_endereco', 'S', @$cadastro->st_entrega_diferente=='S', 'id="enviar_outro_endereco"') ?> Enviar para outro endereço
						</td>
						<td>
							&nbsp;
						</td>
					</tr>
				</table>
			</div>
			
			<div class="col-2">

				<h2>FORMAS DE PAGAMENTO</h2>
				
				<table border="0" cellpadding="0" cellspacing="0" class="formas">
					<tr>
						<td style="width:20px !important; text-align:center"><?php echo form_radio('formapagamento', 'mastercard', true); ?></td>
						<td><img src="<?php echo base_url('img/mastercard.webp') ?>"></td>
						
						<td style="width:20px; text-align:center"><?php echo form_radio('formapagamento', 'visa'); ?></td>
						<td><img src="<?php echo base_url('img/visa.webp') ?>"></td>
						
						<!--td style="width:20px; text-align:center"><?php echo form_radio('formapagamento', 'amex'); ?></td>
						<td><img src="<?php echo base_url('img/amex.webp') ?>"></td-->

						<!--td style="width:20px; text-align:center"><?php echo form_radio('formapagamento', 'boleto'); ?></td>
						<td><img src="<?php echo base_url('img/boleto.webp') ?>"></td-->

                        <td style="width:20px; text-align:center"><?php echo form_radio('formapagamento', 'deposito'); ?></td>
                        <td><img src="<?php echo base_url('img/deposito.png') ?>"></td>

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
							<!--a href="#pesquisar-cep" class="js-cep">O que é isso?</a-->
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label for="mes_validade">Opções de pagamento*</label>
                            <div id="opcoesParcelas">
							<?php echo form_dropdown('parcelas', @$parcelas, set_value('parcelas')); ?>
                            </div>
						</td>
					</tr>
				</table>

                <table border="0" cellpadding="0" cellspacing="0" class="js-dados-deposito" style="display:none">
                    <tr>
                        <td colspan="2" style="text-align:left">
                            <label>Depósito bancário</label>
                            Apresentaremos as opções de depósito após a conclusão da compra
                        </td>
                    </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2" style="text-align:left">
                            <div id="formCupom">
                                <label>Cupom de desconto</label>
                                Caso tenha um cupom de desconto, digite o <br>código abaixo e clique em OK
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <?php echo form_input('codigo', ''); ?>
                                        </td>
                                        <td>
                                            <a href="#" class="btn-small js-cupom">OK</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>

				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">
							<label>Forma de envio*</label>
							<div class="frete-container">
                                <!--p>Digite seu CEP na ficha de cadastro para ver as opções de envio</p-->
							    <?php $this->load->view('html/ecommerce/frete.php') ?>
							</div>
							<div class="frete-container-erro"></div>
						</td>
					</tr>
				</table>
						
			</div>
		
			<div class="col-3">
				<h2>RESUMO DO PEDIDO</h2>

				<table class="table table-resumo">
				
					<tr class="topo">
						<th><?php echo $this->cart->total_items() ?> Itens</th>
						<th>Quantidade</th>
						<th>Valor</th>
					</tr>		
					<?php foreach ($this->cart->contents() as $item): ?>
					<?php $item = (object) $item; ?>
                    <?php if($item->price == 0) continue; ?>
					<!-- BEGIN BLOCK_LIST_PEDIDO -->
					<tr>
						<td class="cart-img">
							<a href="<?php echo $item->link ?>" class="a-prod" title="<?php echo $item->name ?>">
								<img src="<?php echo $item->image ?>" width="120px" height="90px" />
							</a>
                            <br>
                            <span class="s-nome"><?php echo $item->name ?></span> <br />
                            <?php foreach ($this->cart->product_options($item->rowid) as $option_name => $option_value): ?>
                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                            <?php endforeach; ?>
						</td>
						<td class="cart-img">
							<span class="s-qtd"><?php echo $item->qty ?></span>
						</td>
						<td class="nowrap">
							<span class="s-preco">R$ <?php echo $this->cart->format_number($item->subtotal) ?></span>
						</td>
					</tr>
					<!-- END BLOCK_LIST_PEDIDO -->
					<?php endforeach; ?>
					
					<tr class="footer">
						<td colspan="2">Sub-total</td>
						<td style="text-align:left" class="nowrap"><strong>R$ <?php echo $this->cart->format_number($this->cart->total()) ?></strong></td>
					</tr>
                    <tr class="footer">
                        <td colspan="2">Desconto</td>
                        <td style="text-align:left" class="nowrap"><strong class="js-desconto">R$ <?php echo $this->cart->format_number($this->cart->desconto_possivel()) ?></strong></td>
                    </tr>
					<tr class="footer">
						<td colspan="2">Frete</td>
						<td style="text-align:left" class="nowrap"><strong class="js-frete">R$ <?php echo $this->cart->format_number($this->cart->frete()) ?></strong></td>
					</tr>
					<tr class="footer">
						<td colspan="2" class="nowrap">Total</td>
						<td style="text-align:left" class="nowrap"><strong class="js-total">R$ <?php echo $this->cart->format_number($this->cart->total_com_frete()) ?></strong></td>
					</tr>
					
				</table>
				
				<div style="text-align:right">
					<a href="#" class="btn js-fechar">CONCLUIR COMPRA</a>
				</div>
				<div class="concordo-termos">
					<input type="checkbox" name="concordo" id="concordo" title="É necessário concordar com os termos de uso para encerrar a compra"> <label for="concordo">Concordo com os <a href="<?php echo site_url('termo-uso') ?>" class="fancybox" target="_blank">termos de uso</a> da Montecristo</label>
				</div>

				<br /><br />
				<img src="<?php echo base_url('img/ico-seguranca.webp') ?>">
				
			</div>
		
			<div class="endereco_entrega">
				<br clear="all">
				<br>
				<div class="col-1" <?php print @$cadastro->st_entrega_diferente == 'S' ? '' : 'style="display:none"' ?> >
				
					<h2><?php print 'ENDEREÇO DE ENTREGA' ; ?></h2>
				
					<table border="0" cellpadding="0" cellspacing="0" style="margin-top:-20px">
						<tr>
							<td colspan="2">
								<label for="ped_identificacao">Identificação do endereço*</label>
								<?php echo form_input('ped_identificacao', @$cadastro->ped_identificacao); ?>	
							</td>
						</tr>
						<tr>
							<td>
								<label for="ped_cep">CEP*</label>
								<?php echo form_input('ped_cep', @$cadastro->ped_cep, 'class="js-ped-cep"'); ?>	
							</td>
							<td>
								<!--a href="#pesquisar-cep" class="js-cep">Não sabe o CEP?</a-->
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<label for="ped_logradouro">Endereço*</label>
								<?php echo form_input('ped_logradouro', @$cadastro->ped_logradouro); ?>	
							</td>
						</tr>
						<tr>
							<td>
								<label for="ped_numero">Número*</label>
								<?php echo form_input('ped_numero', @$cadastro->ped_numero); ?>	
							</td>
							<td>
								<label for="ped_complemento">Complemento</label>
								<?php echo form_input('ped_complemento', @$cadastro->ped_complemento); ?>	
							</td>
						</tr>
						<tr>
							<td>
								<label for="ped_bairro">Bairro*</label>
								<?php echo form_input('ped_bairro', @$cadastro->ped_bairro); ?>	
							</td>
							<td>
								<label for="ped_cidade">Cidade*</label>
								<?php echo form_input('ped_cidade', @$cadastro->ped_cidade); ?>	
							</td>
						</tr>
						<tr>
							<td>
								<label for="uf">UF*</label>
								<?php echo form_input('ped_uf', @$cadastro->ped_uf); ?>
							</td>
							<td>
								&nbsp;
							</td>
						</tr>
					</table>
				</div>
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
				nome: 'required'
				,sobrenome: 'required'
				,data_nascimento: {required:true, dateBR:true }
				,email: {email: true, required: true}
				,senha: 'required'
				,senha_confirma: {
					required: true
					,equalTo: "#formCheckout input[name='senha']"
				}
				,rg: 'required'
				,cpf: {required:true, cpf:true}
				,fone_res: 'required'
				,fone_cel: 'required'

				// Endereco de cobranca
				,cep: 'required'
				,logradouro: 'required'
				,numero: 'required'
				,bairro: 'required'
				,cidade: 'required'
				,uf: 'required'

				// Endereco de entrega
				,ped_identificacao: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_cep: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_logradouro: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_numero: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_bairro: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_cidade: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}
				,ped_uf: {required:{depends: function(){ return document.getElementById('enviar_outro_endereco').checked }}}

				,formapagamento: 'required'

				// Cartão de credito
				,nome_titular:  {required:{depends: function(){ return is_cc() }}}
				,numero_cartao: {required:{depends: function(){ return is_cc() }}, creditcard:{depends: function(){ return is_cc() }}}
				,codigo_seguranca: {required:{depends: function(){ return is_cc() }}}

				,formaentrega_id: 'required'
				,concordo: 'required'

			}
			,errorPlacement: function(error, element) {
				if (element.attr("name") == "bandeira") {
					error.insertAfter("#lastname");
				}
				else if (element.attr("name") == "formaentrega_id") {
					error.insertAfter(".frete-container-erro");
				}
				else if (element.attr("name") == "concordo") {
					error.insertAfter(".concordo-termos label");
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

	function pesquisa_frete(param){
	
		loadExec(
			function(){
				$.ajax({
					url: '<?php echo site_url('carrinho/frete') ?>'
					,data: param
					,type: 'POST'
					// ,dataType: 'json'
					,success: function(out){
						// console.log(out);
						$('.frete-container').html(out);
						seleciona_frete();
					}
					,beforeSend: function(){
						$('.frete-container').html('');
					}
					,complete: function(){
						$.fancybox.close();
					}
				});
			}
		);
	}

	function seleciona_frete(){

		$('.js-formaentrega input').unbind('click');
		$('.js-formaentrega input').bind('click', function(){

			var param = {
				formaentrega_id: $(this).val()
			};

			$('.js-frete').html('');
			$('.js-total').html('');

			loadExec(function(){
				$.ajax({
					url: '<?php echo site_url('carrinho/set_frete') ?>'
					,data: param
					,type: 'POST'
					,dataType: 'json'
					,success: function(out){
						if(out.status){
							$('.js-frete').html('R$ '+out.valor_formatado);
							$('.js-total').html('R$ '+out.valor_total_formatado);
						}
						// console.log(out);
						// $('.frete-container').html(out);
					}
					,beforeSend: function(){
						// $('.frete-container').html('');
					}
					,complete: function(){
						$.fancybox.close();
                        $('#opcoesParcelas').load('<?php echo site_url('carrinho/parcelas') ?>/?parcelas='+$('[name=parcelas]').val());
					}
				});
			});
		});
	}

    function fancybox_msg(msg){
        $.fancybox.open('<div style="padding:50px;text-align:center"><span style="font-size:20px">'+msg+'</span></div>');
    }

	$(document).ready(function(){
	
		$(".fancybox").fancybox({ wrapCSS: 'checkout' });

		$("input[name='cep']").mask('?99999-999', {
            completed: function(){
                $("input[name='cep']").trigger('change');
            }
        });

		$("input[name='ped_cep']").mask('?99999-999', {
            completed: function(){
                $("input[name='ped_cep']").trigger('change');
            }
        });

		$("input[name='cpf']").mask('?999.999.999-99');
		$("input[name='cnpj']").mask('?99.999.999/9999-99');
		$("input[name='fone_res']").mask('(99)9999-9999?9');
		$("input[name='fone_cel']").mask('(99)9999-9999?9');
		$("input[name='data_nascimento']").mask('?99/99/9999');
		$("input[name='numero_cartao']").mask('?9999-9999-9999-9999');

		$("#verificacao").fancybox({
			'padding': 0
			,'autoScale': false
			,'transitionIn': 'none'
			,'transitionOut': 'none'
		});

		apply_validate();

		$('#formCheckout').ajaxForm({
			success: function(out) {
                fancybox_msg(out.msg);
				if(!out.status){
					$('.js-fechar').html('FECHAR PEDIDO');
				}
				else {
					fancybox_msg(out.msg);
					window.location.href = out.redirect;
				}
			}
			,error: function(jqXHR, textStatus, errorThrown){
                fancybox_msg(textStatus+' '+errorThrown);
				// $('.js-checkout-erro').html(textStatus+' '+errorThrown);
				// $('.js-checkout-erro').fadeIn();
				// console.log(jqXHR);
				// console.log(textStatus);
				// console.log(errorThrown);
			}
			,beforeSubmit: function(){
				$('.js-checkout').html('Aguarde ...');
				// $('.js-checkout-erro').fadeOut();
				return $('#formCheckout').valid();
			}
			,complete: function(){
				// $.fancybox.close();
			}
			,dataType: 'json'
			,resetForm: false
		});
		
		$('.js-fechar').bind('click', function(){

			if(!$('#formCheckout').valid()){ 
				return false;
			}
		
			loadExec( 
				function(){
					$('#formCheckout').submit();
				}
			);
			
			return false;
		});

		$("input[name='cep']").kinghostcep({
			url: '<?php echo site_url('cep/pesquisa') ?>'
			,searchText: "<br><span style='color:#999'>&nbsp;Pesquisar</span>"
			,uf: $("input[name='uf']")
			,cidade: $("input[name='cidade']")
			,bairro: $("input[name='bairro']")
			,tipo_logradouro_logradouro: $("input[name='logradouro']")
			,success: function(out){
			
				if(!document.getElementById('enviar_outro_endereco').checked){
				
					var param = {
						cep: $("input[name='cep']").val() 
						,uf: $("input[name='uf']").val()
						,cidade: $("input[name='cidade']").val()
					};
					
					pesquisa_frete(param);
					
				}
			}
		});

		$("input[name='ped_cep']").kinghostcep({
			url: '<?php echo site_url('cep/pesquisa') ?>'
			,searchText: "<br><span style='color:#999'>&nbsp;Pesquisar</span>"
			,uf: $("input[name='ped_uf']")
			,cidade: $("input[name='ped_cidade']")
			,bairro: $("input[name='ped_bairro']")
			,tipo_logradouro_logradouro: $("input[name='ped_logradouro']")
			,success: function(out){
			
				if(document.getElementById('enviar_outro_endereco').checked){
				
					var param = {
						cep: $("input[name='ped_cep']").val() 
						,uf: $("input[name='ped_uf']").val()
						,cidade: $("input[name='ped_cidade']").val()
					};
					
					pesquisa_frete(param);
					
				}
			}
		});
		
		// $("input[name='uf']").attr('readonly', true).addClass('readonly');
        // $("input[name='cidade']").attr('readonly', true).addClass('readonly');
        // $("input[name='bairro']").attr('readonly', true).addClass('readonly');
        // $("input[name='logradouro']").attr('readonly', true).addClass('readonly');
        // $("input[name='ped_uf']").attr('readonly', true).addClass('readonly');
        // $("input[name='ped_cidade']").attr('readonly', true).addClass('readonly');
        // $("input[name='ped_bairro']").attr('readonly', true).addClass('readonly');
        // $("input[name='ped_logradouro']").attr('readonly', true).addClass('readonly');
		
		<?php if(@$logged): ?>
		$("input[name='cpf']").attr('readonly', true).addClass('readonly');
        $("input[name='cep']").trigger('change');
		<?php endif; ?>
		
		$('.js-entrar-checkout').bind('click', function(){
			$.ajax({
				url: '<?php echo site_url('conta/login') ?>'
				,data: $('.simpleFormCheckout').serialize()
				,dataType: 'json'
				,type: 'POST'
				,success: function(out){
					if(!out.status){
						$('.js-login-checkout-erro').html(out.msg);
						$('.js-login-checkout-erro').fadeIn();
						$('.js-entrar-checkout').html('Entrar');
					}
					else {
						window.location.href = out.redirect;
					}
				}
				,beforeSend: function(){
					$('.js-entrar-checkout').html('Aguarde ...');
					$('.js-login-checkout-erro').fadeOut();	
				}
			});
		});
		
		$('#enviar_outro_endereco').bind('click', function(){
			// apply_validate();
			if(document.getElementById('enviar_outro_endereco').checked){
				$('.endereco_entrega .col-1').slideDown('slow', function(){
					$("input[name='ped_identificacao']").focus();
				});
			}
			else {
				$('.endereco_entrega .col-1').slideUp('slow');
			}
			// console.log(1);
		});

		$('input[name="formapagamento"]').bind('click', function(){
			if($('input[name="formapagamento"]:checked').val() == 'boleto' ){
				$('.js-dados-cartao').slideUp('slow');
                $('.js-dados-deposito').slideUp('slow');
			}
            else if($('input[name="formapagamento"]:checked').val() == 'deposito' ){
                $('.js-dados-cartao').slideUp('slow');
                $('.js-dados-deposito').slideDown('slow');
            }
			else {
                $('.js-dados-deposito').slideUp('slow');
				$('.js-dados-cartao').slideDown('slow');
			}

            var param = {
                formapagamento: $(this).val()
            };

            loadExec(function(){
                $.ajax({
                    url: '<?php echo site_url('carrinho/set_formapagamento') ?>'
                    ,data: param
                    ,type: 'POST'
                    ,dataType: 'json'
                    ,success: function(out){
                        if(out.status){
                            $('.js-desconto').html('R$ '+out.valor_desconto_formatado);
                            $('.js-total').html('R$ '+out.valor_total_formatado);
                        }
                    }
                    ,beforeSend: function(){
                        $('.js-desconto').html('');
                        $('.js-total').html('');
                    }
                    ,complete: function(){
                        $.fancybox.close();
                        $('#opcoesParcelas').load('<?php echo site_url('carrinho/parcelas') ?>/?parcelas='+$('[name=parcelas]').val());
                    }
                });
            });
		});

        $('.js-cupom').bind('click', function(){

            if($('[name="codigo"]').val() == ''){
                fancybox_msg(out.msg);
                $('[name="codigo"]').focus();
                return false;
            }

            loadExec(
                function(){

                    var params = {
                        codigo: $('[name=codigo]').val()
                        ,cpf: $('[name=cpf]').val()
                    }

                    $.ajax({
                        url: '<?php echo site_url('cupom/validar') ?>'
                        ,data: params
                        ,dataType: 'json'
                        ,type: 'POST'
                        ,success: function(out){
                            // alert(out.msg);
                            $('.js-desconto').html('R$ '+out.valor_desconto_formatado);
                            $('.js-total').html('R$ '+out.valor_total_formatado);
                            if(!out.status){
                                $('[name="codigo"]').val('');
                            }
                            fancybox_msg(out.msg);
                        }
                        ,complete: function(){
                            $('#opcoesParcelas').load('<?php echo site_url('carrinho/parcelas') ?>/?parcelas='+$('[name=parcelas]').val());
                        }
                    });
                }
            );

            return false;

        });

	});

	seleciona_frete();
	
</script>
<?php require_once APPPATH.'views/html/footer.php' ?>