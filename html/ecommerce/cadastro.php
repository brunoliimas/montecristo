<?php require_once APPPATH.'views/html/header.php' ?>
<section class="container ecom">

	<div class="checkout-pag">

		<h1>CADASTRO</h1>
		<p class="subtitulo"><?php print !$logged ? 'Preencha os dados para concluir o seu cadastro' : 'Preencha para alterar seus dados cadastrais' ?></p>
		
		<div class="alert alert-danger js-cadastro-erro" style="display:none"></div>
		
		<form id="formCadastro" method="POST" enctype="multipart/form-data" onsubmit="return false" action="<?php echo site_url('conta/cadastrar') ?>">
		
			<input type="hidden" name="send" value="1" />
		
			<div class="col-1">

				<table border="0" cellpadding="0" cellspacing="0">

					<tr>
						<td>
							<label for="nome">Nome*</label>
							<?php echo form_input('nome', @$cadastro->nome); ?>	
						</td>
						<td>
							<label for="sobrenome">Sobrenome*</label>
							<?php echo form_input('sobrenome', set_value('sobrenome', @$cadastro->sobrenome)); ?>	
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
				</table>
			</div>
			
			<div class="col-2">

				<table border="0" cellpadding="0" cellspacing="0">
			
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
							<label for="rg">CEP*</label>
							<?php echo form_input('cep', @$cadastro->cep, 'class="js-cep"'); ?>	
						</td>
						<td>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label for="endereco">Endereço*</label>
							<?php echo form_input('logradouro', @$cadastro->logradouro); ?>	
						</td>
					</tr>
				</table>
			</div>
		
			<div class="col-3">
				
				<table border="0" cellpadding="0" cellspacing="0">
				
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
				</table>
				
			</div>
			
			<br clear="all" />
			
			<div style="text-align:right">
				<a href="#" class="btn js-cadastrar">CADASTRAR</a>
			</div>
		
		</form>
		
		<br clear="all" />
		
	</div>
		
</section>


<script language="javascript">

	$(document).ready(function(){

		$("input[name='cep']").mask('?99999-999');
		$("input[name='cpf']").mask('?999.999.999-99');
		$("input[name='cnpj']").mask('?99.999.999/9999-99');
		$("input[name='fone_res']").mask('(99)9999-9999?9');
		$("input[name='fone_cel']").mask('(99)9999-9999?9');
		$("input[name='data_nascimento']").mask('?99/99/9999');
		
		$('#formCadastro').validate({
			errorElement: 'span'
			,rules: {
				nome: 'required'
				,sobrenome: 'required'
				,data_nascimento: {required:true, dateBR:true }
				,email: {email: true, required: true}
				,senha: 'required'
				,senha_confirma: {
					required: true
					,equalTo: "#formCadastro input[name='senha']"
				}
				,rg: 'required'
				,cpf: {required:true, cpf:true}
				,fone_res: 'required'
				,fone_cel: 'required'
				,cep: 'required'
				,logradouro: 'required'
				,numero: 'required'
				,bairro: 'required'
				,cidade: 'required'
				,uf: 'required'
			}
			,errorPlacement: function(error, element) {
				if (element.attr("name") == "bandeira") {
					error.insertAfter("#lastname");
				}
				else {
					error.insertAfter(element);
				}
			}
		});
		
		$('#formCadastro').ajaxForm({
			success: function(out) {
				if(!out.status){
					$('.js-cadastro-erro').html(out.msg);
					$('.js-cadastro-erro').fadeIn();
					$('.js-cadastrar').html('CADASTRAR');
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
				$('.js-cadastrar').html('Aguarde ...');
				$('.js-cadastro-erro').fadeOut();
				return $('#formCadastro').valid();
			}
			,complete: function(){
				$.fancybox.close();
			}
			,dataType: 'json'
			,resetForm: false
		});
		
		$('.js-cadastrar').bind('click', function(){

			if(!$('#formCadastro').valid()){
				return false;
			}
		
			loadExec(
				function(){
					$('#formCadastro').submit();
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
			// ,success: function(out){
				// console.log(out);
			// }
		});
		
		// $("input[name='uf']").attr('readonly', true).addClass('readonly');
        // $("input[name='cidade']").attr('readonly', true).addClass('readonly');
        // $("input[name='bairro']").attr('readonly', true).addClass('readonly');
        // $("input[name='logradouro']").attr('readonly', true).addClass('readonly');
		
		<?php if(@$logged): ?>
		$("input[name='cpf']").attr('readonly', true).addClass('readonly');
		<?php endif; ?>
		
	});

</script>
<?php require_once APPPATH.'views/html/footer.php' ?>