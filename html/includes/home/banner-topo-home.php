<?php

$banners = get_banners_principais($categoria_id = 0, $colecao_id = 0, true);

if (@$banners  && sizeof($banners) > 0) : ?>
<!-- banner start here -->

<!-- PROVISÓRIO -->
<style>
.swiper-slide>a {
    width: 100%;
    height: 100%;
    display: block;
    position: relative;
    z-index: 2;
}
</style>

<div class="container-fluid padding_0" style="padding:0px;">
    <div class="col-sm-12 padding_0" style="padding:0px;">
        <div class="swiper-container" id="bannerPrincipalSlide">
            <div class="swiper-wrapper">

                <?php

                    $i = 0;
                    $names = '';

                    foreach ($banners as $row) :
                        $names .= $row->titulo . ",";
                        hidratar('bannerprincipal2', $row);

                        if($row->img2 == null){
                            $row->img2 = preg_replace('/(.*upload\/banner)/', '$1/mobile/home', $row->img1);
                        }
                    ?>
                <div class="swiper-slide" style="position:relative;">
                    <a aria-label="<?php echo  $row->titulo ?>" href='<?php echo strtolower($row->custom1); ?>'>
                        <picture>
                            <!-- WEBP DESKTOP -->
                            <source srcset="admin/<?php echo $row->img1 ?>" media="(min-width: 1024px)"
                                type="image/webp">
                            <!-- WEBP MOBILE -->
                            <source srcset="admin/<?php echo $row->img2 ?>" media="(max-width: 1023px)"
                                type="image/webp">
                            <!-- JPG DESKTOP -->
                            <source srcset="admin/<?php echo image_compatibility($row->img1, 'jpg') ?>"
                                media="(min-width: 1024px)" type="image/jpg">
                            <!-- JPG MOBILE -->
                            <source srcset="admin/<?php echo image_compatibility($row->img2, 'jpg') ?>"
                                media="(max-width: 1023px)" type="image/jpg">
                            <!-- DEFAULT -->
                            <img class="banner-img" src="admin/<?php echo image_compatibility($row->img1, 'jpg') ?>"
                                title="<?php echo "Banner da campanha " . $row->titulo ?>"
                                alt="<?php echo isset($row->conteudo) ? ucfirst(strtolower($row->conteudo)) :  "Imagem ilustrativa da campanha $row->titulo" ?>"
                                width="1366" height="768" loading="lazy">
                        </picture>
                    </a>
                    <div class="container item cst-<?php echo $row->custom6 ?>">
                        <div class="div-texto-banner">
                            <div class="informacoes">


                                <!-- <h2 class="<?php echo $row->css_fonte_cor ?> <?php echo $row->css_fonte_tamanho ?>">
                                        <?php
                                        echo anchor(strtolower($row->custom1), $row->titulo);
                                        ?>
                                    </h2>
                                    <p style="max-width:540px;" class="text-banner-home <?php echo $row->css_fonte_cor ?> <?php echo $row->css_fonte_tamanho ?> texto-banner">
                                        <?php
                                        if (!IS_MOBILE) echo anchor(strtolower($row->custom1), isset($row->conteudo) ? $row->conteudo : ' ');
                                        ?>
                                    </p>
                                    <br>
                                    <?php
                                    echo anchor(
                                        strtolower($row->custom1),
                                        (!empty($row->custom5) ? $row->custom5 : 'Descubra mais'),
                                        "class='descubramais_btn descubramais_btn_{$row->css_fonte_cor} btn btn-default {$row->css_fonte_cor} {$row->css_fonte_tamanho}'"
                                    );
                                    ?> -->


                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        $i++;
                    endforeach;
                    ?>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination hidden-xs hidden-sm banner-principal-pagination"></div>
    </div>
</div>

<input type="hidden" id="names-banners" value="<?php echo $names ?>">

<?php endif; ?>