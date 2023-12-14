<div class="header-sacola">
	<ul class="header-sacola-area cf">
	
		<?php if ($this->session->userdata('logged')): ?>
		<li class="conta"><a class="header-sacola-item" href="<?php echo site_url('conta/historico') ?>"><?php echo strtoupper($this->session->userdata('nome_usuario')) ?></a></li>
		<?php else: ?>
		<li class="conta"><a class="header-sacola-item" xhref="<?php echo site_url('conta') ?>" href="#" >MINHA CONTA</a>
			<form class="simpleForm simpleFormLogin">
				<div class="alert alert-danger js-login-erro nodisplay"></div>
				<input type="hidden" name="modo" value="home"/>
				<input type="text" placeholder="E-mail" name="login" autocomplete="off" />
				<input type="password" placeholder="Senha" name="senha" autocomplete="off" />
				<button type="button" class="js-entrar">Enviar</button>
				<br clear="all">
				<a href="<?php echo site_url('conta/cadastro') ?>" class="cadastrar">Quero me cadastrar</a> 
				<a href="<?php echo site_url('conta/senha') ?>" class="senha">Esqueci a senha</a>
			</form>
		</li>
		<?php endif; ?>
			
		<li><a href="#" class="header-sacola-item header-sacola-carrinho" ><?php echo $this->cart->total_items() > 0 ? "(".$this->cart->total_items().")" : "&nbsp;" ?></a>
			<?php if($this->cart->total_items() > 0): ?>
			<div class="simpleForm simpleFormCart">
			<?php foreach ($this->cart->contents() as $itemcart): ?>
			<?php 
			$itemcart = (object) $itemcart; 
			// var_dump($item) ; 
			?>
				<div class="simpleFormCartItem">
					<div class="simpleFormCartItemImg">
						<img src="<?php echo $itemcart->image ?>" width="113px" height="80px" />
					</div>
					<div class="simpleFormCartItemTxt">
						<p><strong><?php echo $itemcart->name ?></strong>
						<!--br>Brinco :	Ouro Branco
						<br>Gema: 	Safira, Diamante-->
						<br>Quant.:	<?php echo $itemcart->qty ?></p>
						<p>R$ <?php echo $this->cart->format_number($itemcart->subtotal) ?></p>
					</div>
					<br clear="all">
				</div>
			<?php endforeach; ?>
			
				<a href="<?php echo site_url('sacola') ?>" class="carrinho">Ver sacola</a> 
				<span class="subtotal">Sub-total: R$ <?php echo $this->cart->format_number($this->cart->total()) ?></span>
				
				<button type="button" class="js-header-comprar" onclick="$('.js-header-comprar').html('AGUARDE...');window.location.href = '<?php echo site_url('sacola/checkout') ?>';">Comprar</button>
				<br clear="all">
				
			</div>
			<?php endif; ?>
		</li>
	</ul>
	<br clear="all" />
	<br />
</div>
<script>
$(document).ready(function(){
	$('.js-entrar').bind('click', function(){
		$.ajax({
			url: '<?php echo site_url('conta/login') ?>'
			,data: $('.simpleFormLogin').serialize()
			,dataType: 'json'
			,type: 'POST'
			,success: function(out){
				if(!out.status){
					$('.js-login-erro').html(out.msg);
					$('.js-login-erro').fadeIn();
					$('.js-entrar').html('Entrar');
				}
				else {
					window.location.href = out.redirect;
				}
			}
			,beforeSend: function(){
				$('.js-entrar').html('Aguarde ...');
				$('.js-login-erro').fadeOut();	
			}
		});
	});
});
</script>