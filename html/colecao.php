<?php require_once 'header.php' ?>
<script>
    // $(function(){
    // 	if($(window).width()>=768){
    // 		$('.products').nested({
    // 			minWidth: ($(".wrapper").width()/16)-19
    // 			,gutter: 20
    // 			,animationOptions: {
    // 				complete: lazyExec
    // 			}
    // 		});
    // 	}
    // 	else {
    // 		$('.products').nested({
    // 			minWidth: ($(".wrapper").width()/16)-10
    // 			,gutter: 10
    // 			,animationOptions: {
    // 				complete: lazyExec
    // 			}
    // 		});
    // 	}
    // });
</script>

<!-- container start here -->
<section class="container">
    <div class="banner">
        <?php foreach ($banners as $row) : ?>
            <?php if ($row->link != '') : ?>
                <a href="<?php echo prep_url($row->link) ?>" target="<?php echo $row->target ?>" title="<?php echo $row->nome ?>"><?php echo img(array('src' => 'admin/upload/colecao/' . $row->imagem, 'class' => 'fullWidth')); ?></a>
            <?php else : ?>
                <?php echo img(array('src' => 'admin/upload/colecao/' . $row->imagem, 'class' => 'fullWidth')); ?>
            <?php endif; ?>
        <?php endforeach ?>
    </div>

    <ul class="products cf">

        <?php $i = 0; ?>
        <?php foreach ($produtos as $row) : ?>

            <?php if ($i == 0 || $i == 4) : ?>
                <li class="size86 box">
                <?php endif; ?>

                <?php if ($i == 1 || $i == 2) : ?>
                <li class="size83 box">
                <?php endif; ?>

                <?php if ($i == 3) : ?>
                <li class="size82 box">
                <?php endif; ?>

                <?php if ($i == 5) : ?>
                <li class="size84 box">
                <?php endif; ?>

                <?php if ($row->link != '') : ?>

                    <a href="<?php echo prep_url($row->link) ?>" target="<?php echo $row->target ?>" title="<?php echo $row->nome ?>"><img class="lazy" data-original="<?php echo base_url('admin/upload/colecao/' . $row->imagem) ?>" alt="<?php echo $row->nome ?>"></a>

                <?php else : ?>

                    <img class="lazy" data-original="<?php echo base_url('admin/upload/colecao/' . $row->imagem) ?>" alt="<?php echo $row->nome ?>">

                <?php endif; ?>

                </li>
                <?php $i = ($i == 5 ? 0 : $i + 1); ?>
            <?php endforeach; ?>

            <!--li class="size86 box"><a href="#" title=""><img src="img/1/1.webp" alt=""></a></li>
		<li class="size83 box"><a href="#" title=""><img src="img/1/12.webp" alt=""></a></li>
		<li class="size83 box"><a href="#" title=""><img src="img/1/11.webp" alt=""></a></li>

		<li class="size82 box"><a href="#" title=""><img src="img/1/2.webp" alt=""></a></li>
		<li class="size86 box"><a href="#" title=""><img src="img/1/10.webp" alt=""></a></li>
		<li class="size84 box"><a href="#" title=""><img src="img/1/3.webp" alt=""></a></li-->

            <!--li class="size86 box"><a href="#" title=""><img src="img/1/4.webp" alt=""></a></li>
		<li class="size83 box"><a href="#" title=""><img src="img/1/8.webp" alt=""></a></li>
		<li class="size83 box"><a href="#" title=""><img src="img/1/9.webp" alt=""></a></li>

		<li class="size82 box"><a href="#" title=""><img src="img/1/5.webp" alt=""></a></li>
		<li class="size86 box"><a href="#" title=""><img src="img/1/7.webp" alt=""></a></li>
		<li class="size84 box"><a href="#" title=""><img src="img/1/6.webp" alt=""></a></li-->

    </ul>
    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>
</section>
<!-- cContainer end here -->
<?php require_once 'footer.php' ?>