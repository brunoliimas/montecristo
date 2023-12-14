<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">
		
	<div class="historico">
	
		<h1>MINHA CONTA</h1>
	
		<p class="subtitulo">
		Olá <?php echo $cadastro->nome ?> (não é <?php echo $cadastro->nome ?>? <a href="<?php echo site_url('conta/logout') ?>">Sair</a>). No painel da sua conta você pode ver seus pedidos recentes, gerenciar seus endereços de entrega e cobrança e editar sua senha e detalhes da conta.
		</p>
	
		<div class="col-1">
		
			<h5>DADOS PESSOAIS</h5>
			
			<p>
			<?php print "{$cadastro->nome} {$cadastro->sobrenome}" ?>
			<br>CPF <?php echo $cadastro->cpf ?>
			<br>RG <?php echo $cadastro->rg ?>
			<?php if($cadastro->sexo == 'M'): ?>
			<br>Masculino
			<?php endif; ?>
			<?php if($cadastro->sexo == 'F'): ?>
			<br>Feminino
			<?php endif; ?>
			</p>

		</div>
		
		<div class="col-2">
		
			<h5>CONTATO</h5>
			
			<p>
			<?php echo $cadastro->email ?>
			<br>CEL. <?php echo $cadastro->fone_cel ?>
			<br>TEL. <?php echo $cadastro->fone_res ?>
			</p>

		</div>
		
		<div class="col-3">
		
			<h5>ENDEREÇO</h5>
			
			<p>
			<?php echo $cadastro->logradouro ?>, <?php echo $cadastro->numero ?> <?php echo $cadastro->complemento != '' ? ", {$cadastro->complemento}" : '' ?>
			<br><?php echo $cadastro->cep ?> - <?php echo $cadastro->bairro ?>
			<br><?php echo $cadastro->cidade ?>, <?php echo $cadastro->uf ?>
			</p>

		</div>
		
		<br clear="all">
	
		<div style="text-align:right">
			<a href="<?php echo site_url('conta/cadastro') ?>" class="btn">ALTERAR CADASTRO</a>
		</div>
		<br>
	
		<h1>HISTÓRICO DE PEDIDO</h1>
		
		<?php if(@$pedidos>0): ?>
		<table class="table table-historico">
		<?php foreach($pedidos as $pedido): ?>

			<tr>
				<td class="table-historico-status">
				
					<p>Pedido:
					<br><strong><?php echo $pedido->id ?></strong>
					</p>
					
					<p>Data da compra:
					<br><strong><?php echo mysql_to_datebr($pedido->data_cadastro) ?></strong>
					</p>
					
					<p>Status:
					<br><strong><?php echo $pedido->status ?></strong>
					</p>
					
					<?php if($pedido->data_envio!=''): ?>
					<p>Data de envio:
					<br><strong><?php echo mysql_to_datebr($pedido->data_envio) ?></strong>
					</p>
					<?php endif; ?>
					
					<?php if($pedido->rastreamento!=''): ?>
					<p>Rastreamento:
					<br><strong><?php echo $pedido->rastreamento ?></strong>
					</p>
					<?php endif; ?>

					<p>Forma de pagamento:
						<br><strong><?php echo $pedido->formapagamento ?>
						<?php if($pedido->formapagamento_id != 5): // É um cartão ?>
							em <?php echo $pedido->parcelas ?>x
						<?php endif ?></strong>
					</p>

					<?php if($pedido->pedidostatus_id == 1
						&& $pedido->formapagamento_id == 5
						&& strtotime($pedido->data_vencimento_boleto) > strtotime(date('Y-m-d'))): // Boleto itaú ?>
						<p>Re-impressão do boleto:
							<?php if( strtotime($pedido->data_vencimento_boleto) > strtotime(date('Y-m-d'))  ) ?>
							<br><strong><a href="<?php echo site_url('boleto/itau/'.md5($pedido->id)) ?>" target="_blank">Clique aqui para re-imprimir o boleto</a></strong>
						</p>
					<?php endif ?>

				</td>
				<td>
					<table class="table table-historico">
						<tr>
							<th>&nbsp;</th>
							<th>Itens</th>
							<th>Valor Unitário</th>
							<th>Quantidade</th>
							<th>Sub-total</th>
						</tr>
						
						<?php foreach ($this->db->select('item.imagem, item.nome, pedidoitem.item_preco, pedidoitem.item_qtd, (pedidoitem.item_qtd*pedidoitem.item_preco) subtotal')
											->from('pedidoitem')
											->join('item', 'item.id = pedidoitem.item_id')
											->where('pedidoitem.pedido_id', $pedido->id)
											->get()->result() as $pedidoitem): ?>
						<?php 
						
						// var_dump($item) ; 
						?>
						<!-- BEGIN BLOCK_LIST_PEDIDO -->
						<tr>
							<td class="cart-img">
								<img src="<?php echo timthumb_url('admin/upload/item/'.$pedidoitem->imagem, '166', '127') ?>" alt="<?php echo $pedidoitem->nome ?>" />
							</td>
							<td>
								<span class="s-nome"><?php echo $pedidoitem->nome ?></span> <br />
							</td>
							<td>
								<span class="s-preco">R$ <?php echo $this->cart->format_number($pedidoitem->item_preco) ?></span><br />
							</td>
							<td>
								<span class="s-qtd"><?php echo $pedidoitem->item_qtd ?></span>
							</td>
							<td>
								<span class="s-preco">R$ <?php echo $this->cart->format_number($pedidoitem->subtotal) ?></span>
							</td>
						</tr>
						<!-- END BLOCK_LIST_PEDIDO -->
						<?php endforeach; ?>
						<tr class="footer">
							<td colspan="2">&nbsp;</td>
							<td colspan="2">SUB-TOTAL</td>
							<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_produtos) ?></strong></td>
						</tr>
                        <tr class="footer">
                            <td colspan="2">&nbsp;</td>
                            <td colspan="2">DESCONTO</td>
                            <td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_desconto) ?></strong></td>
                        </tr>
						<tr class="footer">
							<td colspan="2">&nbsp;</td>
							<td colspan="2">FRETE</td>
							<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_frete) ?></strong></td>
						</tr>
						<tr class="footer">
							<td colspan="2">&nbsp;</td>
							<td colspan="2">TOTAL</td>
							<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($pedido->valor_total) ?></strong></td>
						</tr>
					</table>	
				</td>
			</tr>
			
			<tr><td class="table-historico-line" colspan="2">&nbsp;</td></tr>
		
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>
	<div class="checkout-help">
		<?php require_once('help.php') ?>
	</div>
	
	<br clear="all">
	
</section>
<?php require_once APPPATH.'views/html/footer.php' ?>