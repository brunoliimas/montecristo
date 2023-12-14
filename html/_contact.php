<?php require_once 'header.php' ?>

<script>
	var digitalDataLayer = {
		page: {
			pageType: "store contact page"
		}
	}
</script>

<section class="container">

	<div class="page-header">
		<h1>Contato</h1>
		<hr>
	</div>

	<style>
		ul.shop-list {
			padding-left: 16px;
		}
	</style>

	<div class="row">
		<div class="col-md-6">
			<?php echo $this->db->where('id', 40)->where('st_ativo', 'S')->get('blogpost')->row()->conteudo ?>
		</div>

		<div class="col-md-6">
			<form action="" class="contactForm" method="post">
				<input type="hidden" name="send" value="1" />

				<div class="form-group">
					<input class="form-control" type="text" placeholder="Nome" name="nome" value="<?php echo set_value('nome'); ?>" required title="O campo nome é obrigatório" />
				</div>

				<div class="form-group">
					<input class="form-control" type="email" placeholder="E-mail" name="email" value="<?php echo set_value('email'); ?>" required title="O campo e-mail é obrigatório" />
				</div>

				<div class="form-group">
					<span>Voc&ecirc; &eacute;:</span>
					<input type="radio" name="tipopessoa" value="Consumidor" <?php echo set_checkbox('tipopessoa', 'Consumidor', true); ?>> Consumidor
					<input type="radio" name="tipopessoa" value="Imprensa" <?php echo set_checkbox('tipopessoa', 'Imprensa'); ?>> Imprensa
				</div>

				<div class="form-group">
					<select class="form-control" name="uf">
						<option>UF</option>
						<?php foreach (array("AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "DF" => "Distrito Federal", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins") as $val => $text) : ?>
							<option value="<?php echo $text ?>" <?php echo set_select('uf', $val, $val == 'SP'); ?>><?php echo $text ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" placeholder="Assunto" name="assunto" value="<?php echo set_value('assunto'); ?>" required title="O campo assunto é obrigatório">
				</div>

				<div class="form-group">
					<textarea class="form-control" placeholder="Mensagem" name="mensagem" required title="O campo mensagem é obrigatório"><?php echo set_value('mensagem'); ?></textarea>
				</div>

				<div class="form-group">
					<input type="checkbox" id="politicaprivacidade" name="politicaprivacidade" value="1" required title="Por favor selecionar essa opção"> Li e aceito os <a href="<?php echo site_url('politica-privacidade') ?>">Termos e Condições e a Política de Privacidade</a>
				</div>

				<div class="g-recaptcha" data-sitekey="<?php echo get_siteconfig('GRECAPTCHA_SITEKEY') ?>"></div>


				<button type="submit" class="btn btn-default">Enviar</button>

			</form>

		</div>
	</div>

</section>
<!-- cContainer end here -->



<!-- Google Code for P&aacute;gina de Contato Conversion Page -->
<script>
	/* <![CDATA[ */
	var google_conversion_id = 867541032;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "Xru4CJnmhXEQqMDWnQM";
	var google_remarketing_only = false;
	/* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/867541032/?label=Xru4CJnmhXEQqMDWnQM&amp;guid=ON&amp;script=0" />
	</div>
</noscript>

<?php require_once 'footer.php' ?>