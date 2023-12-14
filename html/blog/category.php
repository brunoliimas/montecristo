<?php
$seo_title = 'Blog';

require_once APPPATH.'views/html/header.php' ?>

<!-- container start here -->
<section class="container blog category">

	<?php $this->load->view('html/blog/header.php') ?>

	<div class="col-1">
		<?php $this->load->view('html/blog/posts.php') ?>
		<?php echo @$paginacao ;?>
	</div>
	<div class="col-2">
		<?php $this->load->view('html/blog/lateral.php') ?>
	</div>

	<br clear="all" />
	<div class="bktop">
		<a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
	</div>

</section>
<!-- cContainer end here -->

<?php require_once APPPATH.'views/html/footer.php' ?>
