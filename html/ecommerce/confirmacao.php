<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout">

		<h1>Confirmação</h1>
	
		<table class="table">
		
			<tr>
				<td style="color:#626365; font-size:14px">

					<p>SUA COMPRA FOI FINALIZADA COM SUCESSO</p>
					<p>Você receberá um e-mail com todas os dados do pedido.</p>
					<br>

					<p>NÚMERO DO PEDIDO: <?php echo $pedido->id ?></p>
					<p>Data da compra: <?php echo mysql_to_datebr($pedido->data_cadastro) ?></p>

					<br>
					<p>ENDEREÇO DE ENTREGA</p>
					<p>
					<?php echo $pedido->logradouro ?>, <?php echo $pedido->numero ?> <?php echo $pedido->complemento != '' ? ", {$pedido->complemento}" : '' ?>
					<br><?php echo $pedido->cep ?> - <?php echo $pedido->bairro ?>
					<br><?php echo $pedido->cidade ?>, <?php echo $pedido->uf ?>
					</p>
					
					<p>STATUS DO PEDIDO: <?php echo $pedido->status ?></p>

					<p>FORMA DE PAGAMENTO: <?php echo $pedido->formapagamento ?>
						<?php if($pedido->formapagamento_id != 5): // É um cartão ?>
							em <?php echo $pedido->parcelas ?>x
						<?php endif ?>
					</p>
					
					<?php if($pedido->pedidostatus_id == 1): // Cartão com criticas ?>
						<?php if($pedido->cielo_msg !='' ): ?>
							<div class="alert alert-danger">
								<b>Atenção:</b> Seu pagamento não foi autorizado, a mensagem que recebemos da sua operadora de cartões é: <strong><?php echo $pedido->cielo_msg ?></strong>
								<br><br>
								<a href="<?php echo site_url('conta/pagamento/'.$pedido->id) ?>" class="btn">Realizar o pagamento</a>
							</div>
						<?php endif; ?>
					<?php endif ?>

					<?php if($pedido->formapagamento_id == 5): // Boleto itaú ?>
						<div class="alert alert-danger">
							<b>Atenção:</b> Para que seu pedido seja confirmado, imprima o boleto abaixo e realize o pagamento</strong>
							<br><br>
							<a href="<?php echo site_url('boleto/itau/'.md5($pedido->id)) ?>" class="btn" target="_blank">Clique aqui para imprimir o seu boleto</a>
						</div>
					<?php endif ?>

                    <?php if($pedido->formapagamento_id == 9): // Deposito bancário ?>
                        <div class="alert">
                            <br />
                            <p>Efetue o pagamento em uma das contas abaixo:</p>
                            <table>
                                <tr>
                                    <td style="white-space: nowrap; padding:10px">
                                        <b>Banco</b>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <b>Agência</b>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <b>Conta</b>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <b>Favorecido</b>
                                    </td>
                                </tr>
                                <?php foreach(is_array($opcoes_deposito) ? $opcoes_deposito : array() as $opcao): ?>
                                <tr>
                                    <td style="white-space: nowrap; padding:10px">
                                        <p style="font-size:12"><?php echo $opcao->depositobancario_banco; ?></p>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <p style="font-size:12"><?php echo $opcao->depositobancario_agencia; ?></p>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <p style="font-size:12"><?php echo $opcao->depositobancario_conta; ?></p>
                                    </td>
                                    <td style="white-space: nowrap; padding:10px">
                                        <p style="font-size:12;line-height:16px"><?php echo $opcao->depositobancario_favorecido; ?></p>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            <br clear="all"/>
                            <p>Valor total a depositar: R$ <?php echo $this->cart->format_number($pedido->valor_total) ?></p>
                        </div>
                    <?php endif ?>

				</td>
			</tr>		
		</table>

		<table class="table">
			<tr>
				<th style="text-align:left">&nbsp;</th>
				<th style="text-align:left">Produto</th>
				<th style="text-align:left">Quantidade</th>
				<th style="text-align:left">Valor Unitário</th>
				<th style="text-align:left">Sub-total</p></th>
			</tr>
			
			<?php foreach ($this->db->select('pedidoitem.id, item.imagem, item.nome, pedidoitem.item_preco, pedidoitem.item_qtd')
							->from('pedidoitem')
							->where('pedidoitem.pedido_id', $pedido->id)
							->join('item', 'item.id = pedidoitem.item_id')
							->get()->result() as $item): ?>
			<?php 
			$item = (object) $item; 
			// var_dump($item) ; 
			?>
			
			<!-- BEGIN BLOCK_LIST_PEDIDO -->
			<tr>
				<td class="cart-img">
					<img src="<?php echo timthumb_url('admin/upload/item/'.$item->imagem, '120', '90') ?>" width="120px" height="90px" />
				</td>
				<td>
					<span class="s-nome">
						<?php echo $item->nome ?>
					</span>
					
					<?php foreach ($this->db->select('nome, valor')->from('pedidoitemopcao')->where('pedidoitem_id', $item->id)->get()->result() as $opcao): ?>
					<br><strong><?php echo $opcao->nome; ?>:</strong> <?php echo $opcao->valor; ?>
					<?php endforeach; ?>
					
				</td>
				<td>
					<span class="s-qtd">
						<?php echo $item->item_qtd ?>
					</span>
				</td>
				<td>
					<span class="s-preco">R$ <?php echo $this->cart->format_number($item->item_preco) ?></span>
				</td>
				<td>
					<span class="s-preco">R$ <?php echo $this->cart->format_number($item->item_preco*$item->item_qtd) ?></span>
				</td>
			</tr>
				<!-- END BLOCK_LIST_PEDIDO -->
			<?php endforeach; ?>

			<tr class="footer">
				<td colspan="3">&nbsp;</td>
				<td>SUB-TOTAL</td>
				<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_produtos) ?></strong></td>
			</tr>
            <tr class="footer">
                <td colspan="3">&nbsp;</td>
                <td>DESCONTO</td>
                <td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_desconto) ?></strong></td>
            </tr>
			<tr class="footer">
				<td colspan="3">&nbsp;</td>
				<td>FRETE</td>
				<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_frete) ?></strong></td>
			</tr>
			<tr class="footer">
				<td colspan="3">&nbsp;</td>
				<td>TOTAL</td>
				<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_total) ?></strong></td>
			</tr>
		</table>

		<a href="<?php echo site_url('conta/historico/'.$pedido->id) ?>" class="btn">Acompanhar Pedido</a>

	</div>
	
	<div class="checkout-help">
		<?php $this->load->view('html/ecommerce/help.php'); ?>
	</div>
	
	<br clear="all">
		
</section>
<br clear="all">
<?php require_once APPPATH.'views/html/footer.php' ?>