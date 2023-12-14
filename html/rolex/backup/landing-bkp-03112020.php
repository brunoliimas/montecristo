<?php
$adobelaunch = isset($adobelaunch_var) && $adobelaunch_var;
require_once APPPATH . 'views/html/header.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>

<div id="rlx-wrapper">

    <section class="rlx-top-banner" style="background:url('<?php echo base_url("img/rolex/Landing_top_banner_img_1680x420.webp") ?>');
                     background-size:cover;
                     background-repeat: no-repeat;
                     background-position: center center;">
    </section>

    <!-- Landing page intro -->
    <section class="rlx-intro">
        <div class="txt-internal">
            <h1 class="title">VIVA A EXPERIÊNCIA ROLEX</h1>
            <h2 class="title-big">RELÓGIOS ROLEX</h2>
            <hr class="text-sep">
            <p>Os relógios Rolex são produzidos a partir das melhores matérias-primas e montados segundo métodos que levam meticulosamente em conta cada detalhe. Cada componente é projetado, desenvolvido e produzido segundo rigorosos padrões de exigência.</p>
        </div>
    </section>

    <section id="rlx-watch-container">
        <div class="rlx-watch-grid">
            <?php
            // $relogios = $this->db->select('*');
            ?>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/datejust') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/datejust.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Datejust</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/gmt-master-ii') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/gmt-master-ii.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">GMT-Master II</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/day-date') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/daydate.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Day-Date</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/submariner') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/submariner.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Submariner</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/oyster-perpetual') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/oysterperpetual.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Oyster Perpetual</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('relogios/rolex/colecao?cmplp=rolex-watches/cosmograph-daytona') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/daytona.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Cosmograph Daytona</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/yacht-master') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/yachtmasterii.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Yacht-Master</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/datejust') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/ladydatejust.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Lady-Datejust</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/sea-dweller') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/seadweller.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Sea-Dweller</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/explorer') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/explorer.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Explorer</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/sky-dweller') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/skydweller.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Sky-Dweller</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/milgauss') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/milgauss.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Milgauss</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/cellini') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/cellini.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Cellini</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/pearlmaster') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/pearlmaster.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Pearlmaster</span>
                    </div>
                </a>
            </div>

            <div class="rlx-item">
                <a href="<?php echo site_url('relogios/rolex/colecao?cmplp=rolex-watches/air-king') ?>">
                    <div class="rlx-asset">
                        <img src="<?php echo base_url('img/rolex/colecoes/airking.png') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Rolex</span>
                        <span class="wg">Air-King</span>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section id="featured-selections">
        <div class="internal">
            <div class="featured-title">
                <span>Seleções em destaque</span>
            </div>
            <div class="featured-modules">
                <div class="module">
                    <a class="clickbox" href="<?php echo site_url('rolex/colecao/?cmplp=watches/man') ?>"><span></span></a>
                    <div class="module-image" style="background-image:url(<?php echo base_url('img/rolex/mens-watches_sky_dweller.webp') ?>); background-repeat: no-repeat; background-size:cover; background-position: center center;"></div>
                    <span>Relógios Rolex Masculinos</span>
                </div>
                <div class="module">
                    <a class="clickbox" href="<?php echo site_url('rolex/colecao/?cmplp=watches/woman') ?>"><span></span></a>
                    <div class="module-image" style="background-image:url(<?php echo base_url('img/rolex/womens-watches_pearlmaster_39.webp') ?>); background-repeat: no-repeat; background-size:cover; background-position: center center;"></div>
                    <span>Relógios Rolex Femininos</span>
                </div>
                <div class="module module-wide">
                    <a class="clickbox" href="<?php echo site_url('rolex/colecao/?cmplp=watches/gold') ?>"><span></span></a>
                    <div class="module-image" style="background-image:url(<?php echo base_url('img/rolex/gold-watches.webp') ?>); background-repeat: no-repeat; background-size:cover; background-position: center center;"></div>
                    <span>Relógios em ouro Rolex</span>
                </div>
            </div>
        </div>
    </section>


    <section id="rlx-experience">
        <div class="exp-internal">

            <h2 class="title-big">VISITE-NOS NA LOJA</h2>
            <hr class="text-sep">

            <div class="experience-image">
                <img src="<?php echo base_url('img/rolex/experiencia-rolex.png') ?>" />
            </div>

            <p>A Montecristo tem orgulho de fazer parte da rede mundial de revendedores oficiais da Rolex. Na Montecristo, estamos a sua disposição para ajudá-lo a escolher o relógio Rolex que melhor lhe convier, na ampla variedade de relógios disponíveis. Nossa loja no Shopping JK Iguatemi é reconhecida como revendedor oficial da Rolex vendendo apenas relógios Rolex com garantia.</p>

            <a class="cta rolex-cta" href="<?php echo site_url('rolex/contato') ?>">Entre em contato</a>

        </div>
    </section>

</div><!-- End wrapper -->

<div class="clear"></div>

<!-- End content -->

<?php
require_once APPPATH . 'views/html/rolex/footer.php';
require_once APPPATH . 'views/html/footer.php';
