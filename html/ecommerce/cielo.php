<?php 
	// require "../includes/include.php";
?>


<h2>
	Carrinho
</h2>

<div style="background-color:#a3674f;padding:20px;">

<form name="frm" action="carrinhoCartaoPagamento.php" method="post">
	<table border="1">
		<tr>
			<td>Produto</td>
			<td>
				<select name="produto">
					<option value="10000">Celular - R$ 100,00</option>
					<option value="37057">Celular - R$ 370,57</option>
					<option value="200000">iPhone - R$ 2.000,00</option>
					<option value="999000000">Legacy 500 - R$ 9.990.000,00</option>
					<option value="0">Injeção - R$ 0,00</option>
					<option value="799990">TV 46'' LED - R$ 7.999,90</option>
					<option value="100">Bala Chita - R$ 1,00</option>
				</select>						 
			</td>			
		</tr>
		<tr>
			<td>Forma de pagamento</td>
			<td>
				<select name="codigoBandeira">
					<option value="visa">Visa</option>
					<option value="mastercard">Mastercard</option>
					<option value="elo">Elo</option>
				</select>
				<br/>										
				<input type="radio" name="formaPagamento" value="A">Débito
				<br><input type="radio" name="formaPagamento" value="1" checked>Crédito à Vista
				<br><input type="radio" name="formaPagamento" value="3">3x
				<br><input type="radio" name="formaPagamento" value="12">12x
				<br><input type="radio" name="formaPagamento" value="18">18x
				<br><input type="radio" name="formaPagamento" value="36">36x
				<br><input type="radio" name="formaPagamento" value="56">56x						
			</td>
		</tr>
		<tr>
			<td>Tentar Autenticar?</td>
			<td>
				<input type="radio" name="tentarAutenticar" value="sim"/>Sim
				<input type="radio" name="tentarAutenticar" value="nao" checked="checked"/>Não
			</td>
		</tr>		
		<tr>
			<td>Cartão</td>
			<td>
				<table border="0">
					<tr>
						<td>Número</td>
						<td><input type="text" name="cartaoNumero" value="4551870000000183"></td>
					</tr>
					<tr>
						<td>Validade (jun/2010 = 201006)</td>
						<td><input type="text" name="cartaoValidade" value="201508"></td>
					</tr>
					<tr>
						<td>Cód. Segurança</td>
						<td><input type="text" name="cartaoCodigoSeguranca" value="973"></td>
					</tr>												
				</table>
			</td>
		</tr>
		<tr>
			<td>Configuração</td>
			<td>
				<table>
					<tr>
						<td>
							Parcelamento
						</td>
						<td>
							<select name="tipoParcelamento">
								<option value="2">Loja</option>
								<option value="3">Administradora</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Capturar Automaticamente?</td>
						<td>
							<select name="capturarAutomaticamente">
								<option value="true">Sim</option>
								<option value="false" selected="selected">Não</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Autorização Automática</td>
						<td>
							<select name="indicadorAutorizacao">
								<option value="3">Autorizar Direto</option>
								<option value="2">Autorizar transação autenticada e não-autenticada</option>
								<option value="0">Somente autenticar a transação</option>
								<option value="1">Autorizar transação somente se autenticada</option>
							</select>
						</td>
					</tr>							
				</table>
			</td>
		</tr>										
		<tr>
			<td align="center" colspan="2">
				<input type="submit" value="Pagar"/>
			</td>
		</tr>
	</table>
</form>

</div>