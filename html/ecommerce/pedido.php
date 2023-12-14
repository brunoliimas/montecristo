<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout">

		<a href="<?php echo site_url('continuar_comprando') ?>" class="back-link">&lt; Continue Comprando</a>
		<br clear="all" />
	
		<h1>CESTA DE COMPRAS</h1>
	
		<table class="table">
			<tr>
				<th>&nbsp;</th>
				<th><?php echo $this->cart->total_items() ?> Itens</th>
				<th>Valor Unitário</th>
				<th>Quantidade</th>
				<th>Sub-total</th>
				<th style="text-align:center">
					<img src="<?php echo base_url('img/ico-favorito.webp') ?>" >
				</th>
			</tr>
			<?php foreach ($this->cart->contents() as $item): ?>
			<?php $item = (object) $item; ?>
            <?php if($item->price == 0) continue; ?>
			<!-- BEGIN BLOCK_LIST_PEDIDO -->
			<tr>
				<td class="cart-img">
					<a href="<?php echo $item->link ?>" class="a-prod" title="<?php echo $item->name ?>">
						<img src="<?php echo $item->image ?>" width="166px" height="127px" />
					</a>
				</td>
				<td>
					<span class="s-nome"><?php echo $item->name ?></span> <br />					
					<?php foreach ($this->cart->product_options($item->rowid) as $option_name => $option_value): ?>
					<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
					<?php endforeach; ?>
				</td>
				<td>
					<span class="s-preco">R$ <?php echo $this->cart->format_number($item->price) ?></span><br />
				</td>
				<td>
					<form class="form_qtd" action="<?php echo site_url('carrinho/alt/'.$item->id) ?>" name="formAlt" method="post">
						<input type="hidden" name="id" value="<?php echo $item->id ?>"/>
						<input type="text" class="qty" size="5" maxlength="5" value="<?php echo $item->qty ?>" name="qtd" onchange="this.form.submit()" onfocus="this.select()" />
					</form>
				</td>
				<td>
					<span class="s-preco2">R$ <?php echo $this->cart->format_number($item->subtotal) ?></span>
				</td>
				<td style="text-align:center">						
					<a href="<?php echo site_url('favoritos/adicionar/'.$item->id) ?>" title="Favoritos" class="crown crown-add">Mover para favoritos</a>
					<br><a href="<?php echo site_url('carrinho/del/'.$item->id) ?>" alt="Remover Produto" title="Remover Produto">Remover</a>
				</td>
			</tr>
			<!-- END BLOCK_LIST_PEDIDO -->
			<?php endforeach; ?>
			
			<tr class="footer">
				<td>&nbsp;</td>
				<td colspan="3">TOTAL</td>
				<td style="text-align:xcenter"><strong>R$ <?php echo $this->cart->format_number($this->cart->total()) ?></strong></td>
				<td style="text-align:center"><strong>
						<?php if(($n = maximo_parcelas($this->cart->total(), maximo_parcelas_carrinho())) > 1): ?>
							Ou <?php echo $n ?>x de R$ <?php echo $this->cart->format_number(valor_minimo_parcela(null, maximo_parcelas_carrinho())) ?>
						<?php endif; ?>
					</strong></td>
			</tr>
			
		</table>
	
		<div style="text-align:right">
			<a href="<?php echo site_url('sacola/checkout') ?>" class="btn" onclick="javascript:goog_report_conversion()">COMPRAR</a>
		</div>
		<br>

	</div>
	
	<div class="checkout-help">
		<?php require_once('help.php') ?>	
	</div>
	
	<br clear="all">
	
	<!-- Google Code for P&aacute;gina de Carrinho Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 867541032;
    w.google_conversion_label = "rMYLCITfnnEQqMDWnQM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }

	
</section>
<?php require_once APPPATH.'views/html/footer.php' ?>