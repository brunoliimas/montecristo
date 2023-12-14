<?php

require_once 'header.php';

if(@$categoria && @$categoria->html_integracao != ''):
	print $categoria->html_integracao ;
endif;

// require_once 'banners.php';
$this->load->view('html/includes/listagem/banner-categoria.php');
$this->load->view('html/includes/listagem/banner-colecao.php');
?>

<?php if(isset($titulo_navegacao)): ?>
	<h1 class="tit-navegacao">
		<?php echo $titulo_navegacao ?>
	</h1>
<?php endif;  ?>

	<section class="container produtos-container">
<div class="row">
	<div class="col-sm-2 hidden-xs">
		<?php
		print '<input type="hidden" id="categoria_id" value="'.@$categoria->id.'">';
		require 'includes/filtro-caracteristicas.php';
		?>
	</div>
	<div class="col-sm-10">

		<?php
		$i = 0;
		$iimagem = 0;
		$x = 0;

		while(true){

			if(!isset($produtos[$x])){
				break;
			}

			print "<div class='row produtos-row'>";

			for($a = 0;$a<3;$a++){

				if(!isset($produtos[$x])){
					break;
				}

				$this->load->view('html/includes/produto.php', array('row'=>$produtos[$x]));
				$x ++;
			}

			print "</div>";
		}

		$this->pagination->initialize(array(
			'base_url' => site_url(array($palavra_chave_listagem,$filtro_listagem)),
			'uri_segment' => 3,
			'total_rows' => $total_rows,
			'per_page' => 15,
			'page_query_string' => FALSE,
			'use_page_numbers' => true
		));

		print $this->pagination->create_links();

		?>
		<!-- <a href="<?php echo site_url('produtos/scroll/1/?'.http_build_query(
				array(
					'categoria_id' => @$categoria->id,
					'caracvalor' => array_merge(is_array(@$caracvalor)?$caracvalor:array(),is_array(@$caracteristicas_selecionadas)?$caracteristicas_selecionadas:array()),
					'online' => @$online,
					'colecao'=>@$colecao,
					'offset' => isset($offset) ? $offset : null
				)
			)) ?>" class="next-page" style="display:none"></a> -->

	</div>
</div>
</section>
<?php require_once 'footer.php' ?>
