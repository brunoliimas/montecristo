<?php require_once 'header.php' ?>

<section class="container">
	<?php
	if(sizeof($produtos)>0):
	?>
	<div class="page-header">
		<h2>Foram encontrados <?php echo sizeof($produtos) ?> resultado(s) de busca para &ldquo;<?php echo $buscar ?>&rdquo;</h2>
	</div>

	<?php

	foreach(array_chunk($produtos, 3) as $grupo_produtos){
		print "<div class='row produtos-row'>";
		foreach($grupo_produtos as $produto){
			$this->load->view('html/includes/produto.php', array('row'=>$produto));
		}
		print "</div>";
	}
	?>

	<?php
	else:
	?>
		<h5 class="result-not-found">N&atilde;o foram encontrados resultados para &ldquo;<?php echo $buscar ?>&rdquo;</h5>
	<?php
	endif;
	?>

	<form action="<?php echo site_url('buscar') ?>" class="search-form cf">
		<input type="text" placeholder="Busca" name="q">
		<input type="submit" value="ok">
	</form>

</section>

<?php require_once 'footer.php' ?>