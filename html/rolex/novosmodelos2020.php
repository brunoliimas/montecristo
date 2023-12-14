<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>

<div id="rlx-wrapper">

    <section class="rlx-top-banner" style="background:url('<?php echo base_url("img/rolex/new_2020_watches_cover.webp") ?>');
                     background-size:cover;
                     background-repeat: no-repeat;
                     background-position: center center;">
    </section>

    <!-- Landing page intro -->
    <section class="rlx-intro">
        <div class="txt-internal">
            <h1 class="title">Relógios Rolex</h1>
            <h2 class="title-big">NOVOS MODELOS 2020</h2>
            <hr class="text-sep">
            <p>O novo Submariner e Submariner Date são reinterpretados com uma caixa redesenhada e ligeiramente ampliada
                para 41 mm. O novo Datejust 31 é apresentado numa versão em Rolesor branco com uma variedade de
                mostradores de diversas cores. Totalmente reinterpretada, a gama Oyster Perpetual inclui mostradores
                vibrantes para o Oyster Perpetual 36 e introduz um novo modelo de 41 mm. Pela primeira vez, o novo
                Sky-Dweller é equipado com uma bracelete Oysterflex.</p>
        </div>
    </section>

    <div class="bootstrap-wrapper updated-featured">
        <div class="grid rolex-grid row">
            <a class="col-6 featured-link-container"
                href="<?php echo site_url('rolex/colecao?cmplp=rolex-watches/submariner/m124060-0001') ?>"
                xhref="/pages/rolex-collections#submariner">

                <div class="featured-img-container">
                    <div class="featured-img one"></div>
                </div>
                <div class="featured-text left">SUBMARINER<div class="sub-featured-text">O arquétipo do relógio de
                        mergulho</div>
                </div>
            </a>
            <a class="col-6 featured-link-container"
                href="<?php echo site_url('rolex/colecao?cmplp=rolex-watches/datejust/m278384rbr-0029') ?>"
                xhref="/pages/rolex-collections#lady-datejust">
                <div class="featured-img-container">
                    <div class="two featured-img"></div>
                </div>
                <div class="featured-text right">DATEJUST 31<div class="sub-featured-text">O relógio clássico de
                        referência</div>
                </div>
            </a>
        </div>
        <div class="grid rolex-grid row">
            <a class="col-6 featured-link-container"
                href="<?php echo site_url('rolex/colecao?cmplp=rolex-watches/oyster-perpetual/m124300-0001') ?>"
                xhref="<?php echo site_url('rolex/colecao?cmplp=rolex-watches/datejust/m278384rbr-0029') ?>"
                xhref="/pages/rolex-collections#oyster-perpetual">
                <div class="featured-img-container">
                    <div class="featured-img three"></div>
                </div>
                <div class="featured-text left">OYSTER PERPETUAL 41<div class="sub-featured-text">A essência do Oyster
                    </div>
                </div>
            </a>
            <a class="col-6 featured-link-container"
                href="<?php echo site_url('rolex/colecao?cmplp=rolex-watches/sky-dweller/m326238-0009') ?>"
                xhref="/pages/rolex-collections#sky-dweller">
                <div class="featured-img-container">
                    <div class="four featured-img"></div>
                </div>
                <div class="featured-text right">SKY-DWELLER<div class="sub-featured-text">O relógio dos grandes
                        viajantes</div>
                </div>
            </a>
        </div>
    </div>

    <div class="beauty-shot"></div>

</div>

<?php
require_once APPPATH . 'views/html/rolex/footer.php';
require_once APPPATH . 'views/html/footer.php';