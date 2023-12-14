<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>

<script>
    var digitalDataLayer = {
        page: {
            pageType: "history page"
        }
    }
</script>

<div class="bf-rolex">
    <section class="breadcrumbcontent">
        <div class="breadcrumb"><a href="/rolex">Rolex</a><span> &gt; </span><a href="/rolex/nossahistoria">Nossa História</a></div>
    </section>
    <div class="banner-rolex-desktop">
        <div class="box-banner">
            <a>
                <picture>
                    <source srcset="<?php echo image_compatibility(site_url("img/rolex/img/OUR_HISTORY.webp"), 'webp') ?>">
                    <img src="<?php echo image_compatibility(site_url("img/rolex/img/OUR_HISTORY.jpg"), 'jpg') ?>">
                </picture>
            </a>
        </div>
    </div>
    <div class="banner-rolex-mobile">
        <div class="box-banner">
            <a>
                <picture>
                    <source srcset="<?php echo image_compatibility(site_url("img/rolex/img/OUR_HISTORY.webp"), 'webp') ?>">
                    <img src="<?php echo image_compatibility(site_url("img/rolex/img/OUR_HISTORY.jpg"), 'jpg') ?>">
                </picture>
            </a>
        </div>
    </div>
    <section class="infoscontato">
        <div class="contato">
            <span class="top-subtitle">Rolex na Montecristo</span>
            <h1 class="top-title">
                Nossa História <br> Montecristo Joalheria
            </h1>
            <span class="top-message">
                Distribuidor oficial Rolex por mais de 50 anos, a Montecristo prima pela dedicação e qualidade de
                atendimento personalizado oferecendo aos seus clientes uma completa experiência da marca
            </span>
        </div>
    </section>
    <section id="rlx-content-grid">

        <div class="rlx-content-container">

            <div class="img-left">
                <div class="img-left-image">
                    <picture>
                        <source srcset="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_3.webp') ?>" type="image/webp">
                        <img alt="Entrada loja Montecristo" title="Entrada loja Montecristo" src="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_3.jpg') ?>">
                    </picture>
                </div>
                <div class="img-left-text">
                    <div class="internal">
                        <h2 class="top-title">A MONTECRISTO</h2>
                        <p class="text-content">Fundada em 1961 por Nelson Semeoni, a Montecristo Joalheira abre suas
                            portas no centro da
                            cidade, especificamente na Galeria Nova Barão.<br />
                            Concebida nos moldes europeus, a joalheria atraía a clientela mais elegante da cidade
                            com
                            joias sob medida e perfeitamente adequadas ao gosto e perfil de cada cliente. Em 1974,
                            prevendo a expansão da cidade para a Zona Sul, inaugura sua primeira filial no
                            Shopping Iguatemi. Dez anos mais tarde os filhos Nelson Semeoni Jr e Marcelo Semeoni
                            tornam-se gestores adotando um novo ritmo para a joalheria, consolidando um estilo
                            atemporal
                            para suas lojas conquistando, também a segunda geração de clientes.</p>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="img-right">
                <div class="img-right-text">
                    <div class="internal">
                        <h2 class="top-title">PASSANDO POR GERAÇÕES</h2>
                        <p class="text-content">Desde sua fundação a Montecristo antecipa tendências, transformando
                            metais e pedras
                            preciosas
                            em joias com a ajuda dos mais renomados designers e ourives do país. Seguindo o desejo dos
                            consumidores a Montecristo continua até os dias de hoje criando
                            peças
                            que agregam valor e sofisticação a todos os momentos, mantendo um posicionamento que
                            transita com fluidez entre o clássico e o moderno.</p>
                    </div>
                </div>
                <div class="img-right-image">
                    <picture>
                        <source srcset="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_4.webp') ?>" type="image/webp">
                        <img alt="Interior Showroom Rolex Montecristo" title="Interior Showroom Rolex Montecristo" src="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_4.jpg') ?>">
                    </picture>
                </div>
            </div>

            <div class="clear"></div>

            <div class="img-left">
                <div class="img-left-image">
                    <picture>
                        <source srcset="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_5.webp') ?>" type="image/webp">
                        <img alt="Interior Showroom Rolex Montecristo" title="Interior Showroom Rolex Montecristo" src="<?php echo base_url('img/rolex/img/OUR_SHOWROOM_5.jpg') ?>">
                    </picture>
                </div>
                <div class="img-left-text">
                    <div class="internal">
                        <h2 class="top-title">ROLEX NA MONTECRISTO</h2>
                        <p class="text-content">Em 1971, a Montecristo como referência em inovação, confiança e
                            qualidade na sociedade
                            paulista, torna-se a primeira revendedora oficial Rolex do Brasil.<br>
                            Sendo iniciada por seu fundador Nelson Semeoni, esta parceria de sucesso já dura mais de
                            50
                            anos e vem sendo reconhecida por várias gerações como uma das maiores concessionárias
                            Rolex
                            no Brasil, localizada no Shopping JK Iguatemi, atraindo os amantes mais exigentes da
                            alta
                            relojoaria.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="banner-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 padding_0">
                    <picture>
                        <source srcset="<?php echo base_url('img/rolex/img/banner-footer-retrato.webp') ?>" media="(max-width: 991px)">
                        <img src="<?php echo base_url('img/rolex/img/banner-footer.jpg') ?>" class="img-responsive" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once APPPATH . 'views/html/rolex/footer.php';
require_once APPPATH . 'views/html/footer.php';
