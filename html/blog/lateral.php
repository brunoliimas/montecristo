<div class="blog-lateral">

	<div class="blog-lateral-busca">
		<form action="<?php echo site_url('blog/buscar') ?>">
			<input type="text" placeholder="Busca" name="q" class="text" value="<?php echo  $this->security->xss_clean($this->input->get('q')); ?>" />
			<button type="submit"><span>Buscar</span></button>
		</form>
	</div>
	
	<div class="blog-lateral-categorias">
		
		<h3>Categorias</h3>
		
		<ul>
			<?php foreach($tags as $tag): ?>
				<li><a href="<?php echo site_url('blog/tag/'.$tag->slug) ?>" <?php echo  $tag->id == @$filtro_tag_id ? 'style="font-weight:bold;text-decoration:underline;"' : '' ?> ><?php echo $tag->nome ?></a></li>
			<?php endforeach; ?>
		</ul>
		<br clear="all">
	
	</div>
	
	<div class="blog-lateral-autores">
		
		<h3>Quem escreve</h3>

		<?php foreach($autores as $autor): ?>
		<div class="blog-lateral-autor">

			<?php if($autor->img1!=''):?>
			<img src="<?php echo base_url('admin/upload/autores/'.$autor->img1) ?>" class="foto" />
			<?php endif;?>

			<div class="blog-lateral-autor-info">
				<!--h3><?php echo @$nome[0] ?></h3-->
				<h3><?php echo $autor->nome ?></h3>
				<p><?php echo nl2br($autor->qualificacao) ?></p>
			</div>
			<br clear="all">
		</div>
		<?php endforeach;?>
	</div>
	
	<div class="blog-lateral-social">
		<a href="<?php echo get_siteconfig('FACEBOOK') ?>" class="facebook">Facebook</a>
		<a href="<?php echo get_siteconfig('INSTAGRAM') ?>" class="instagram">Instagram</a>
	</div>

</div>