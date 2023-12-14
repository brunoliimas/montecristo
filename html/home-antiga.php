<section class="container hide">
    <ul class="products home cf">
        <?php 
			$i=0; 
			foreach($destaques as $destaque):
			if($i==0||$i==4||$i==6): 
		?>
        <li class="size78 box <?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==1||$i==2||$i==3||$i==5||$i==7): ?>
        <li class="size94 box <?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <?php elseif($i==8||$i==9||$i==10): ?>
        <li class="size34 box<?php if ($destaque->custom1 != '' ? print 'homevideo' : '' ) ?>">
            <div
                style="width:100%;height:40px;background-color:#fcf6f5;position:absolute;top:5%;z-index:100;text-align:center;">
                <span
                    style="position:relative;top:30%;font-size:14px;color:#a06650"><?php print($destaque->titulo);?></span>
            </div>
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
                            poster="<?php echo base_url('admin/upload/homeitem/'.$destaque->img1) ?>"
                            style="visibility:hidden"></video>
                        <!--img class="lazy" data-original="<?php echo base_url('admin/upload/homeitem/'.$destaque->img1) ?>" alt="<?php echo $destaque->titulo ?>" /-->
                    </div>
                </a>
                <?php else: ?>

                <?php if($destaque->custom3 != '' && $destaque->custom4 != ''):?>
                <a class="fancybox fancybox.iframe" href="<?php echo site_url('homevideo/'.$destaque->id) ?>"><img
                        src="<?php echo base_url('admin/upload/homeitem/'.$destaque->img1) ?>"
                        alt="<?php echo $destaque->titulo ?>"></a>
                <?php else: ?>
                <a href="<?php echo strtolower($destaque->link) ?>" title="<?php echo $destaque->titulo ?>"><img
                        class="lazy" data-original="<?php echo base_url('admin/upload/homeitem/'.$destaque->img1) ?>"
                        alt="<?php echo $destaque->titulo ?>"></a>
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