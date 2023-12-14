<?php
if (isset($banner_colecao)) {
    hidratar('colecao', $banner_colecao);
?>
<div class="banner-colecao">
    <div class="banner-colecao-item" style="position:relative;padding-top:0;">

        <!-- PROVISÓRIO -->
        <?php $banner_colecao->imagem_big_mobile = preg_replace('/(.*upload\/colecao)/', '$1/mobile', $banner_colecao->imagem_big); ?>

        <picture>
            <!-- DESKTOP WEBP -->
            <source srcset="<?php echo base_url('admin/' . $banner_colecao->imagem_big) ?>" media="(min-width: 1024px)"
                type="image/webp">
            <!-- MOBILE WEBP -->
            <source srcset="<?php echo base_url('admin/' . $banner_colecao->imagem_big_mobile) ?>"
                media="(max-width: 1023px)" type="image/webp">

            <!-- DESKTOP JPG -->
            <source srcset="<?php echo image_compatibility(base_url('admin/' . $banner_colecao->imagem_big), 'jpg') ?>"
                media="(min-width: 1024px)" type="image/webp">
            <!-- MOBILE JPG -->
            <source
                srcset="<?php echo image_compatibility(base_url('admin/' . $banner_colecao->imagem_big_mobile), 'jpg') ?>"
                media="(max-width: 1023px)" type="image/webp">

            <img src="<?php echo base_url('admin/' . $banner_colecao->imagem_big . '?v=20220319') ?>"
                title="<?php echo "Coleção " . $banner_colecao->nome ?>"
                alt="<?php echo "Conheça nossa coleção " . $banner_colecao->nome ?>" loading="lazy" width="1179"
                height="403" style="width:100%; height: auto;" class='img_banner_colecao' />
        </picture>

        <div style="position:absolute;top:50%;left:0;width:100%;transform:translate(0, -45%);">

            <div class="container banner_colecao_container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <h1
                            class="<?php print trim("{$banner_colecao->css_fonte_cor} {$banner_colecao->css_fonte_tamanho}") ?>">
                            <?php
                                echo $banner_colecao->nome;
                                ?>
                        </h1>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                        <p
                            class="hidden-sm hidden-xs <?php print trim("{$banner_colecao->css_fonte_cor} {$banner_colecao->css_fonte_tamanho}") ?>">
                            <?php
                                echo $banner_colecao->descricao;
                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<?php
}