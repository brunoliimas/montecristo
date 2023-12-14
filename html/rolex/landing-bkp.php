<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>
<?php

$baseUrl = site_url('rolex/colecao/') . "?cmplp=rolex-watches&cmpfa=";
$baseUrlFoto = site_url('img/img-home');

$prodsHome = [
    [
        "slug" => "cosmograph-daytona",
        "id" => "126506-0001",
        "title" => "cosmograph daytona"
    ],
    [
        "slug" => "1908",
        "id" => "52508-0006",
        "title" => "1908"
    ],
    [
        "slug" => "yacht-master",
        "id" => "226627-0001",
        "title" => "yacht-master"
    ],
    [
        "slug" => "sky-dweller",
        "id" => "336239-0002",
        "title" => "sky-dweller"
    ],
    [
        "slug" => "gmt-master-ii",
        "id" => "126713grnr-0001",
        "title" => "gmt-master ii"
    ],
    [
        "slug" => "explorer",
        "id" => "124273-0001",
        "title" => "explorer"
    ],
    [
        "slug" => "oyster-perpetual",
        "id" => "124300-0001",
        "title" => "oyster perpetual"
    ],
    [
        "slug" => "day-date",
        "id" => "228236-0012",
        "title" => "day-date"
    ],
    [
        "slug" => "datejust",
        "id" => "126234-0051",
        "title" => "datejust"
    ],
    [
        "slug" => "lady-datejust",
        "id" => "279135rbr-0001",
        "title" => "lady-datejust"
    ],
    [
        "slug" => "air-king",
        "id" => "126900-0001",
        "title" => "air-king"
    ],
    [
        "slug" => "sea-dweller",
        "id" => "126603-0001",
        "title" => "sea-dweller"
    ],
    [
        "slug" => "submariner",
        "id" => "124060-0001",
        "title" => "submariner"
    ],
];


?>

<div class="rlx-wrapper">

    <section class="rlx-intro">
        <picture>
            <!-- DESKTOP WEBP -->
            <source srcset="<?php echo site_url('img\rolex\landing\paisagem\banner-xs_datejust-36.webp') ?>" media="(min-width:992px)">
            <!-- MOBILE WEBP-->
            <source srcset="<?php echo site_url('img\rolex\landing\retrato\banner-xs_datejust-36_portrait.webp') ?>" media="(max-width:991px)">

            <!-- DESKTOP JPG -->
            <source srcset="<?php echo site_url('img\rolex\landing\paisagem\banner-xs_datejust-36.jpg') ?>" media="(min-width:992px)">
            <!-- MOBILE JPG-->
            <source srcset="<?php echo site_url('img\rolex\landing\retrato\banner-xs_datejust-36_portrait.jpg') ?>" media="(max-width:991px)">

            <!-- DEFAULT -->
            <img src="<?php echo site_url('img\rolex\landing\retrato\banner-xs_datejust-36_portrait.webp') ?>" alt="Novos modelos 2021" class="rlx-banner" alt="Imagem representando um bracelete de relógio Rolex com uma coroa de ouro no topo da nova linha de modelos 2021" width="1366" height="190">
        </picture>
        <span>Viva a experiência Rolex</span>
        <div class="rlx-text text-center">
            <h1 class="rlx-titulo">
                <!-- <span class="small">Bem-vindo(a) à Montecristo <br></span> -->
                Distribuidor Oficial Rolex em São Paulo
            </h1>
            <p>
                A Montecristo tem orgulho de fazer parte da rede mundial de revendedores oficiais da Rolex.
                Temos profundo conhecimento do universo Rolex e estamos à disposição para te ajudar na sua escolha.
                Nossa loja no Shopping JK Iguatemi em São Paulo, é reconhecida como revendedor oficial da Rolex e vende
                apenas relógios Rolex com garantia.
            </p>
            <!-- <p>
                Os relógios Rolex são produzidos a partir das melhores matérias-primas e montados segundo métodos que levam
                meticulosamente em conta cada detalhe. Cada componente é projetado, desenvolvido e produzido segundo rigorosos padrões de exigência.
            </p> -->
        </div>
    </section>












    <section id="rlx-watch-container">
        <div class="rlx-watch-grid">
            <?php
            // $relogios = $this->db->select('*');
            ?>

            <?php foreach ($prodsHome as $p) { ?>

                <a href="<?php echo $baseUrl . $p["slug"] ?>" rel="search" title="<?php echo $p["title"] ?>" class="rlx-item">
                    <figure role="img">
                        <picture class="rlx-asset">
                            <source srcset="<?php echo $baseUrlFoto . '/lg/' . $p["id"] . '.png' ?>" media="(min-width: 800px)">
                            <img src="<?php echo $baseUrlFoto . '/md/' . $p["id"] . '.png' ?>" width="100%" alt="<?php echo $p["title"] ?>" loading="lazy">
                        </picture>
                        
                        <figcaption class="rlx-cln">
                            <span>Rolex</span>
                            <span><?php echo strtoupper( $p["title"] ) ?></span>
                        </figcaption>
                    </figure>
                </a>

            <?php } ?>

        </div>
    </section>











    <section class="rlx-outro container">
        <div class="row rlx-lista">
            <div class="featured-title">
                <span>Seleções em destaque</span>
            </div>

            <a class="col-xs-6 item" href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/man') ?>" rel="search" title="RELÓGIOS ROLEX MASCULINOS">
                <figure role="img">
                    <picture class="rlx-asset">

                        <!-- DESKTOP WEBP -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\mens-watches_gmt_master_2.webp') ?>" media="(min-width:992px)">
                        <!-- MOBILE WEBP-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\mens-watches_gmt_master_2_portrait.webp') ?>" media="(max-width:991px)">

                        <!-- DESKTOP JPG -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\mens-watches_gmt_master_2.jpg') ?>" media="(min-width:992px)" media="(min-width:992px)">
                        <!-- MOBILE JPG-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\mens-watches_gmt_master_2_portrait.jpg') ?>" media="(max-width:991px)">

                        <img src="<?php echo base_url('img\rolex\landing\retrato\mens-watches_gmt_master_2_portrait.webp') ?>" alt="RELÓGIOS ROLEX MASCULINOS" width="564" height="413" loading="lazy" />
                    </picture>
                    <figcaption>
                        <span>RELÓGIOS ROLEX MASCULINOS</span>
                    </figcaption>
                </figure>
            </a>

            <a class="col-xs-6 item" href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/woman') ?>" rel="search" title="RELÓGIOS ROLEX FEMININOS">
                <figure role="img">
                    <picture class="rlx-asset">

                        <!-- DESKTOP WEBP -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\womens-watches_lady_datejust.webp') ?>" media="(min-width:992px)">
                        <!-- MOBILE WEBP-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\womens-watches_lady_datejust_portrait.webp') ?>" media="(max-width:991px)">

                        <!-- DESKTOP JPG -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\womens-watches_lady_datejust.jpg') ?>" media="(min-width:992px)" media="(min-width:992px)">
                        <!-- MOBILE JPG-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\womens-watches_lady_datejust_portrait.jpg') ?>" media="(max-width:991px)">

                        <img src="<?php echo base_url('img\rolex\landing\retrato\womens-watches_lady_datejust_portrait.webp') ?>" alt="RELÓGIOS ROLEX FEMININOS" width="564" height="413" loading="lazy" />
                    </picture>
                    <figcaption>
                        <span>RELÓGIOS ROLEX FEMININOS</span>
                    </figcaption>
                </figure>
            </a>

            <a class="col-xs-12 item" href="<?php echo site_url('rolex/colecao/?cmplp=watches/gold') ?>" rel="search" title="RELÓGIOS EM OURO ROLEX">
                <figure role="img">
                    <picture class="rlx-asset">

                        <!-- DESKTOP WEBP -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\gold-watches.webp') ?>" media="(min-width:992px)">
                        <!-- MOBILE WEBP-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\gold-watches_portrait.webp') ?>" media="(max-width:991px)">

                        <!-- DESKTOP JPG -->
                        <source srcset="<?php echo base_url('img\rolex\landing\paisagem\gold-watches.jpg') ?>" media="(min-width:992px)" media="(min-width:992px)">
                        <!-- MOBILE JPG-->
                        <source srcset="<?php echo base_url('img\rolex\landing\retrato\gold-watches_portrait.jpg') ?>" media="(max-width:991px)">

                        <img src="<?php echo base_url('img\rolex\landing\retrato\gold-watches_portrait.webp') ?>" alt="RELÓGIOS EM OURO ROLEX" width="1142" height="411" loading="lazy" />
                    </picture>
                    <figcaption>
                        <span>RELÓGIOS EM OURO ROLEX</span>
                    </figcaption>
                </figure>
            </a>
        </div>

        <div class="exp-internal">

            <picture class="">

                <!-- DESKTOP WEBP -->
                <source srcset="<?php echo base_url('img\rolex\landing\paisagem\experience-a-rolex.webp') ?>" media="(min-width:992px)">
                <!-- MOBILE WEBP-->
                <source srcset="<?php echo base_url('img\rolex\landing\retrato\experience-a-rolex_portrait.webp') ?>" media="(max-width:991px)">

                <!-- DESKTOP JPG -->
                <source srcset="<?php echo base_url('img\rolex\landing\paisagem\experience-a-rolex.jpg') ?>" media="(min-width:992px)" media="(min-width:992px)">
                <!-- MOBILE JPG-->
                <source srcset="<?php echo base_url('img\rolex\landing\retrato\experience-a-rolex_portrait.jpg') ?>" media="(max-width:991px)">

                <img src="<?php echo base_url('img\rolex\landing\retrato\experience-a-rolex_portrait.webp') ?>" alt="EXPERIENCIE A ROLEX" width="800" height="535" loading="lazy" />
            </picture>

            <div class="rlx-text text-center">
                <h2 class="rlx-titulo">VISITE-NOS NA LOJA</h2>
                <p>
                    A Montecristo tem orgulho de fazer parte da rede mundial de revendedores oficiais da Rolex.
                    Na Montecristo, estamos a sua disposição para ajudá-lo a escolher o relógio Rolex que melhor
                    lhe convier, na ampla variedade de relógios disponíveis. Nossa loja no Shopping JK Iguatemi
                    é reconhecida como revendedor oficial da Rolex vendendo apenas relógios Rolex com garantia.
                </p>
            </div>

            <a class="cta rolex-cta" href="<?php echo site_url('rolex/contato') ?>">Entre em contato</a>

        </div>
    </section>

</div>


</div><!-- End wrapper -->

<div class="clear"></div>

<!-- End content -->

<?php
require_once APPPATH . 'views/html/rolex/footer.php';
require_once APPPATH . 'views/html/footer.php';
