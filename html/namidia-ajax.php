<?php if(@$itens): ?>
	<?php foreach(@$itens as $row): ?>
				
		<?php if(@$row->tipo_exibicao==1): ?>
			<li class="box size23">
			<?php if($row->youtube_id!=''): ?>
			<a class="fancybox fancybox.iframe" rel="group" href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
			<?php else: ?>
			<a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/'.$row->imagem) ?>">
			<?php endif; ?>
			<?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '152', '238') ?>
			<img class="lazy" data-original="<?php echo timthumb_url('admin/upload/midiaitem/'.$row->imagem, '152', '238') ?>" />
							
		<?php elseif(@$row->tipo_exibicao==2): ?>
			<li class="box size43">
			<?php if($row->youtube_id!=''): ?>
			<a class="fancybox fancybox.iframe" rel="group" href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
			<?php else: ?>
			<a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/'.$row->imagem) ?>">
			<?php endif; ?>
			<?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '324', '238') ?>
			<img class="lazy" data-original="<?php echo timthumb_url('admin/upload/midiaitem/'.$row->imagem, '324', '238') ?>" />
		
		<?php elseif(@$row->tipo_exibicao==3): ?>
			<li class="box size86">
			<?php if($row->youtube_id!=''): ?>
			<a class="fancybox fancybox.iframe" rel="group" href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
			<?php else: ?>
			<a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/'.$row->imagem) ?>">
			<?php endif; ?>
			<?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '668', '496') ?>
			<img class="lazy" data-original="<?php echo timthumb_url('admin/upload/midiaitem/'.$row->imagem, '668', '496') ?>" />
		
		<?php endif; ?>
		</a></li>
	<?php endforeach; ?>
<?php endif; ?>