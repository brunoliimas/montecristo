<?php require_once 'header.php' ?>


<!--?php require_once 'banners.php' ?-->

<!-- container start here -->
<style>
.w100 {
    width: 100% !important
}
</style>
<section class="wrapper-content" style="max-width: 1150px;margin: 0 auto;">

    <p style="text-align:center;color:#CCC;padding:86px 0;font-size:1.4em" id="_loading">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        <span class="sr-only">Loading...</span>
    </p>
    <h2 style="display:none">Montecristo</h2>
    <ul class="products home cf" style="visibility: hidden;padding:0;">
        <?php $i=0; ?>
        <?php foreach($joiasitens as $destaque): ?>
        <?php if($i==0||$i==1||$i==5||$i==4): ?>
        <li class="size94 box <?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==2||$i==3): ?>
        <li class="size78 box <?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==6):?>
        <li class="size98 box<?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==7):?>
        <li class="size78 box<?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==8): ?>
        <li class="size95 box w100<?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>"
            style="width: 100% !important">
            <!--div style="width:100%;height:40px;background-color:#fcf6f5;position:absolute;top:5%;z-index:100;text-align:center;"><span style="position:relative;top:30%;font-size:14px;color:#a06650"><!--?php print($destaque->titulo);?-->
            <!--/span></div-->
            <?php endif; ?>
            <?php if($destaque->custom1 != ''): ?>

            <?php if($destaque->custom3 != '' && $destaque->custom4 != ''):?>
            <a class="fancybox fancybox.iframe" href="<?php echo site_url('homevideo/'.$destaque->id) ?>"
                data-custom1="<?php echo $destaque->custom1 ?>" data-custom2="<?php echo $destaque->custom2 ?>">
                <?php else: ?>
                <a href="<?php echo strtolower($destaque->link) ?>" title="<?php echo $destaque->titulo ?>"
                    data-custom1="<?php echo $destaque->custom1 ?>" data-custom2="<?php echo $destaque->custom2 ?>">
                    <?php endif; ?>
                    <div class="video_main" style="border:0px">
                        <video width="100%" height="100%" loop
                            poster="<?php echo base_url('admin/upload/joiasitem/'.$destaque->img1) ?>"
                            style="visibility:hidden"></video>
                        <!--img class="lazy" data-original="<?php echo base_url('admin/upload/joiasitem/'.$destaque->img1) ?>" alt="<?php echo $destaque->titulo ?>" /-->
                    </div>
                </a>
                <?php else: ?>

                <?php if($destaque->custom3 != '' && $destaque->custom4 != ''):?>
                <a class="fancybox fancybox.iframe" href="<?php echo site_url('homevideo/'.$destaque->id) ?>">
                    <picture>
                        <source srcset="<?php echo base_url('admin/upload/joiasitem/'.$destaque->img1) ?>" type="image/jpg">
                        <img src="<?php echo image_compatibility(base_url('admin/upload/joiasitem/'.$destaque->img1), 'jpg') ?>" alt="<?php echo $destaque->titulo ?>">
                    </picture>
                </a>
                <?php else: ?>
                <a href="<?php echo strtolower($destaque->link) ?>" title="<?php echo $destaque->titulo ?>">
                    <picture>
                        <source srcset="<?php echo base_url('admin/upload/joiasitem/'.$destaque->img1) ?>" type="image/jpg">
                        <img class="lazy" style="max-width:100%;" data-original="<?php echo base_url('admin/upload/joiasitem/'.$destaque->img1) ?>" src="<?php echo image_compatibility(base_url('admin/upload/joiasitem/'.$destaque->img1), 'jpg') ?>" alt="<?php echo $destaque->titulo ?>">
                    </picture>
                </a>
                <?php endif; ?>

                <?php endif; ?>
        </li>
        <?php $i = ($i == 10 ? 0 : $i + 1) ; ?>
        <?php endforeach; ?>
    </ul>
    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>
</section>

<?php if($this->config->item('popup_home')): ?>
<?php if(!$this->input->cookie($this->config->item('popup_cookie')) && !$this->session->userdata('logged')): ?>
<a class="fancybox-news fancybox.iframe" href="<?php echo site_url('news/pop/'.$this->config->item('popup_cookie')) ?>"
    style="display:none">Pop</a>
<?php endif; ?>
<?php endif; ?>

<?php include "popup/pop_up.php" ?>

<!-- container end here -->
<?php require_once 'footer.php' ?>

<script>
$(document).ready(function() {

    sliderExec(true, '');

    $(".fancybox").fancybox({
        wrapCSS: 'fancyvideo',
        padding: 0,
        width: '100%',
        height: '100%',
        maxWidth: '1260',
        maxHeight: '540px'
    });

    $(".fancybox-news").fancybox({
        wrapCSS: 'fancynews <?php echo $this->config->item('popup_cookie') ?>',
        padding: 0,
        width: '100%',
        height: '100%'
        <?php if ($this->config->item('popup_cookie')=='diasdasmulheres2016'):  ?>,
        maxWidth: '800px',
        maxHeight: '418px'
        <?php elseif ($this->config->item('popup_cookie')=='consum2016'):  ?>,
        maxWidth: '560px',
        maxHeight: '643px'
        <?php elseif ($this->config->item('popup_cookie')=='201750offpecasselecionadas'):  ?>,
        maxWidth: '612px',
        maxHeight: '712px'
        <?php else: ?>,
        maxWidth: '612px',
        maxHeight: '712px'
        <?php endif ;  ?>
    });

    setTimeout(function() {
        $('.fancybox-news').trigger('click');
    }, 1000);

    $('.logo-container').hover(function() {
        go_to_banner('bannerprincipal38');
    });

});

setTimeout(function() {
    $('#_loading').fadeOut('slow', function() {
        $('.products').css('visibility', 'visible');
    })
}, 600);
</script>