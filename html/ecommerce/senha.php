<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout-pag">

		<?php if($step==1): ?>
		
		<?php if($this->session->flashdata('warning_senha')): ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata('warning_senha') ?></div>
		<?php endif; ?>
	
		<h1>ESQUECI MINHA SENHA</h1>
		<p class="subtitulo">Perdeu sua senha? Digite seu nome de usuário ou endereço de e-mail. Você receberá um link por e-mail para criar uma nova senha.</p>
		
		<form id="formSenha" method="POST" enctype="multipart/form-data" onsubmit="return false" action="<?php echo site_url('conta/senha') ?>">
		
			<input type="hidden" name="send" value="1" />
		
			<div class="col-1">
						
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<div class="alert alert-danger js-senha-erro" style="display:none"></div>						
							<label for="login">Digite seu e-mail*</label>
							<?php echo form_input('login', set_value('login')); ?>	
						</td>
					</tr>
				</table>
			</div>
						
			<br clear="all" />
			<br />
			
			<div style="text-align:left">
				<a href="#" class="btn js-enviar">Redefinir senha</a>
			</div>
		
		</form>
		
		<br clear="all" />
				
		<?php endif; ?>
		
		<?php if($step==2): ?>
	
		<h1>CRIAR UMA NOVA SENHA DE ACESSO</h1>
		<p class="subtitulo">Digite uma nova senha abaixo</p>
		
		<form id="formSenha" method="POST" enctype="multipart/form-data" onsubmit="return false" action="<?php echo site_url('conta/reset') ?>">
		
			<input type="hidden" name="send" value="1" />
			<input type="hidden" name="token" value="<?php echo $token ?>" />
		
			<div class="col-1">
						
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<div class="alert alert-danger js-senha-erro" style="display:none"></div>
							
							<label for="nome">Nova senha*</label>
							<?php echo form_password('senha', set_value('senha')); ?>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="nome">Confirmação da nova senha*</label>
							<?php echo form_password('senha_confirma', set_value('senha_confirma')); ?>	
						</td>
					</tr>
										
				</table>
			</div>
						
			<br clear="all" />
			<br />
			
			<div style="text-align:left">
				<a href="#" class="btn js-enviar">Redefinir senha</a>
			</div>
		
		</form>
		
		<br clear="all" />
				
		<?php endif; ?>
				
	</div>
		
</section>

<script language="javascript">

	$(document).ready(function(){
		
		$('#formSenha').validate({
			errorElement: 'span'
			,rules: {
				<?php if($step==1): ?>
				email: {email: true, required: true}
				<?php elseif($step==2): ?>
				senha: 'required'
				,senha_confirma: { required: true, equalTo: "#formSenha input[name='senha']" }
				<?php endif; ?>
			}
			,errorPlacement: function(error, element) {
				error.insertAfter(element);
			}
		});
		
		$('#formSenha').ajaxForm({
			success: function(out) {
				if(!out.status){
					$('.js-senha-erro').html(out.msg);
					$('.js-senha-erro').fadeIn();
				}
				else {
					alert(out.msg);
					window.location.href = out.redirect;
				}
			}
			,error: function(out, error, msg){
				// $.fancybox.close();
				// setError(msg);
				alert(msg);
			}
			,complete: function(){
				$('.js-enviar').html('Enviar');
			}
			,beforeSubmit: function(){
				$('.js-enviar').html('Aguarde ...');
				$('.js-senha-erro').fadeOut();
				return $('#formSenha').valid();
			}
			,dataType: 'json'
			,resetForm: false
		});
		
		$('.js-enviar').bind('click', function(){
			if(!$('#formSenha').valid()){
				return false;
			}
			$('#formSenha').submit();
			// loadExec(
				// function(){
					// $('#formSenha').submit();
				// }
			// );
			return false;
		});

	});

</script>
<?php require_once APPPATH.'views/html/footer.php' ?>