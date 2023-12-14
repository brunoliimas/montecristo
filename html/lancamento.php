<?php require_once 'header.php' ?>

<style>
    .lancamento .fancybox-skin {
        background-color: #fff;
        background-image: none;
        border-radius: 0px;
        padding-top: 25px !important;
    }

    .lancamento .fancybox-title {
        margin-bottom: 20px;
        padding: 0px;
        text-align: center;
        font-size: 20px;
        font-size: 2.5rem;
        line-height: 0.8;
        color: #3a3b3c;
        height: 40px;
        font-family: 'times_sans_serif';
    }
</style>

<script>
    // function nestedExec(scroll){
    // 	 $('.products').nested({
    // 		minWidth: ($(".wrapper").width()/16)-19
    // 		,gutter: 20
    // 	});
    // }

    // $(document).ready(function() {
    // 	// sliderExec(true, 'last');
    // 	nestedExec(false);
    // 	$(".fancybox").fancybox(
    // 		{
    // 			wrapCSS: 'lancamento'
    // 			,padding: 0
    // 			// ,maxWidth: 1000
    // 			,width: '100%'
    // 			,height: '100%'
    // 			,maxWidth: '1260'
    // 			,maxHeight: '540px'
    // 		}
    // 	);
    // });
</script>
<!-- container start here -->
<section class="container">
    <img src="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img1, '1360', '520') ?>" alt="" class="fullWidth" />

    <div class="lankamento cf">
        <div class="content width-60 float-left">
            <h2><a href="#" title="<?php echo $lancamento->titulo ?>"><?php echo $lancamento->titulo ?></a>
                <span><?php echo $lancamento->custom1 ?></span>
            </h2>
            <?php
            $primeira_letra = $lancamento->conteudo{
                0};
            ?>
            <p><em><?php echo $primeira_letra ?></em><?php echo substr(nl2br($lancamento->conteudo), 1, 1000) ?></p>
        </div>
        <?php if (@$lancamento->custom2 != '' && @$lancamento->custom3 != '') : ?>
            <div class="width-40 float-right"><a class="fancybox fancybox.iframe" href="<?php echo site_url('video/' . $lancamento->chave) ?>" href="http://www.youtube.com/embed/<?php echo $youtube_id ?>?autoplay=1&rel=0" xtitle="<?php echo $lancamento->titulo ?>" class="lankamento-img"><img class="lazy" data-original="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img2, '544', '418') ?>" alt=""></a></div>
        <?php else : ?>
            <div class="width-40 float-right"><a href="#" title="<?php echo $lancamento->titulo ?>" class="lankamento-img"><img class="lazy" data-original="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img2, '544', '418') ?>" alt=""></a></div>
        <?php endif; ?>
    </div>
    <ul class="products cf">
        <li class="size86 box"><a href="#"><img class="lazy" data-original="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img3, '668', '496') ?>" alt=""></a></li>
        <li class="size83 box"><a href="#"><img class="lazy" data-original="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img4, '668', '238') ?>" alt=""></a></li>
        <li class="size83 box"><a href="#"><img class="lazy" data-original="<?php echo timthumb_url('admin/upload/lancamento/' . $lancamento->img5, '668', '238') ?>" alt=""></a></li>
    </ul>
    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>
</section>
<!-- container end here -->
<?php require_once 'footer.php' ?>