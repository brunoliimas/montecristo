<?php
if (isset($banner_categoria)) {

    hidratar('categoria', $banner_categoria);

?>
    <div class="banner-categoria">
        <div class="banner-categoria-item" style="position:relative; padding-top:0;">

            <!-- PROVISÓRIO -->
            <?php $banner_categoria->imagem_tema2_mobile = preg_replace('/(.*upload\/categoria)/', '$1/mobile', $banner_categoria->imagem_tema2); ?>


            <picture>
                <!-- Indisponíveis -->
                <!-- DESKTOP PNG -->
                <!-- <source srcset="<?php echo image_compatibility(base_url('admin/' . $banner_categoria->imagem_tema2), 'png') ?>" media="(min-width: 1024px)" type="image/webp"> -->
                <!-- MOBILE PNG -->
                <!-- <source srcset="<?php echo image_compatibility(base_url('admin/' . $banner_categoria->imagem_tema2_mobile), 'png') ?>" media="(max-width: 1023px)" type="image/webp"> -->

                <!-- DESKTOP WEBP -->
                <source srcset="<?php echo base_url('admin/' . $banner_categoria->imagem_tema2) ?>" media="(min-width: 1024px)" type="image/webp">
                <!-- MOBILE WEBP -->
                <source srcset="<?php echo base_url('admin/' . $banner_categoria->imagem_icone2) ?>" media="(max-width: 1023px)" type="image/webp">

                <img src="<?php echo base_url('admin/' . $banner_categoria->imagem_tema2 . '?v=20220319') ?>" title="<?php echo "Coleção " . $banner_categoria->nome ?>" alt="<?php echo "Conheça nossa coleção " . $banner_categoria->nome ?>" loading="lazy" width="1179" height="403" style="width:100%; height: auto;" />
            </picture>

            <div class="banner-text">
                <div class="container banner_categoria_div">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                            <h1 class="<?php print trim("{$banner_categoria->css_fonte_cor} {$banner_categoria->css_fonte_tamanho}") ?>">
                                <?php
                                echo $banner_categoria->nome;
                                ?>
                            </h1>
                            <p class="hidden-sm hidden-xs <?php print trim("{$banner_categoria->css_fonte_cor} {$banner_categoria->css_fonte_tamanho}") ?>">
                                <?php
                                echo $banner_categoria->descricao;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
