<ul class="products products-<?php echo $pagina ?> cf">
	<?php $i = 0; ?>
	<?php foreach($produtos as $row): ?>
		<?php $class = ( $i==0 || $i==6 || $i==12 ? 'size86' : 'size43' ) ; ?>
		<?php $this->load->view('html/includes/produto.php', array('class'=>$class, 'row'=>$row));?>
		<?php $i = ($i == 9 ? 0 : $i + 1) ; ?>
	<?php endforeach; ?>
</ul>

<a href="<?php echo site_url('favoritos/scroll/'.($pagina+1)) ?>" class="next-page" style="display:none">Mais</a>