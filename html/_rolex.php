<?php require_once 'header.php' ?>

<style>
    .rlx-item {
        float: left;
        width: 33%;
    }

    .rlx-item img {
        max-width: 100%;
    }
</style>

<script>
    var digitalDataLayer = {
        page: {
            pageType: "home page"
        }
    }
</script>


<div id="rlx-wrapper">

    <!-- Start Rolex navigation -->
    <section id="rlx-menu-container">
        <div class="plaque-container">
            <picture>
                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/Retailer_plaque_160x80.jpg" type="image/jpg">
                <img class="rolex-int-plaque" src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/Retailer_plaque_160x80.webp" />
            </picture>
        </div>
        <div class="mobile-icon">
            Menu
            <picture>
                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/arrow_down.png" type="image/jpg">
                <img style="margin-left:8px; width:16px;" src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/arrow_down.png" />
            </picture>
        </div>
    </section>

    <menu>
        <div class="menu-rolex-menu-container">
            <ul id="menu-rolex-menu" class="menu">
                <li class=""><a href="<?php echo site_url('relogios/rolex') ?>" aria-current="page">Rolex at Lister Horsfall</a></li>
                <li class=""><a href="<?php echo site_url('relogios/rolex/colecao') ?>">Coleção Rolex</a></li>
                <li class=""><a href="<?php echo site_url('relogios/rolex/nossa-historia') ?>">Nossa história</a></li>
                <!--li class=""><a href="https://www.listerhorsfall.co.uk/watches/rolex/our-showrooms/">Our Showrooms</a></li-->
                <li class=""><a href="<?php echo site_url('relogios/rolex/contato') ?>">Contato</a></li>
            </ul>
        </div>
    </menu>


    <!-- Landing page intro -->
    <section class="rlx-intro">
        <div class="txt-internal">
            <h1 class="title">BEM VINDO A MONTECRISTO</h1>
            <h2 class="title-big">DISTRIBUIDOR OFICIAL ROLEX</h2>
            <hr class="text-sep">
            <p>A Montecristo tem orgulho em fazer parte da rede mundial de Distribuidores Oficiais Rolex autorizados a vender e a realizar a manutenção dos relógios Rolex. Com perícia, know-how técnico e equipamentos especiais, nós garantimos a autenticidade de cada peça do seu relógio Rolex. Escolha o seu Rolex entre os modelos da coleção apresentada abaixo ou entre em contato conosco para conversar com nossos profissionais especializados, que o ajudarão a fazer uma escolha para a vida toda.</p>
        </div>
    </section>
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

            <div class="rlx-item">
                <a href="<?php echo site_url('rolex/colecao/?cmplp=rolex-watches/day-date') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/daydate.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/daydate.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Day-Date</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/sky-dweller') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/skydweller.webp') ?>" type="image/jpg">
                        </picture>
                        <img src="<?php echo base_url('img/rolex/colecoes/skydweller.webp') ?>" alt="" />
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Sky-Dweller</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/datejust') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/datejust.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/datejust.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Datejust</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/datejust') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/ladydatejust.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/ladydatejust.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Lady-Datejust</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/pearlmaster') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/pearlmaster.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/pearlmaster.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Pearlmaster</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/oyster-perpetual') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/oysterperpetual.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/oysterperpetual.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Oyster Perpetual</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/air-king') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/airking.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/airking.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Air-King</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/cosmograph-daytona') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/daytona.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/daytona.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Cosmograph Daytona</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/submariner') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/submariner.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/submariner.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Submariner</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/sea-dweller') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/seadweller.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/seadweller.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Sea-Dweller</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/gmt-master-ii') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/gmtmasterii.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/gmtmasterii.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">GMT-Master II</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/yacht-master') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/yachtmasterii.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/yachtmasterii.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Yacht-Master</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/explorer') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/explorer.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/explorer.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Explorer</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/milgauss') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/milgauss.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/milgauss.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Milgauss</span>
                    </div>
                </a>
            </div>
            <div class="rlx-item">
                <a href="/rolex/colecao/?cmplp=rolex-watches/cellini') ?>">
                    <div class="rlx-asset">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/colecoes/cellini.webp') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/colecoes/cellini.webp') ?>" alt="" />
                        </picture>
                    </div>
                    <div class="rlx-cln">
                        <span class="wg">Cellini</span>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section id="rlx-watchmaking">
        <div class="rlx-vid-container">
            <iframe frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/-guAJ9zhZ9w?suggestedQuality=hd1040&amp;height=100%25&amp;width=100%25&amp;controls=1&amp;showinfo=0&amp;modestbranding=0&amp;allowfullscreen=true&amp;iv_load_policy=3&amp;rel=0&amp;enablejsapi=1&amp;hl=en&amp;cc_lang_pref=en&amp;cc_load_policy=0&amp;autoplay=0&amp;widget_referrer=https%3A%2F%2Fwww.jamieson-carry.com%2Fwatches%2Frolex%2F&amp;origin=https%3A%2F%2Fwww.rolex.com&amp;widgetid=1" id="widget2"></iframe>
        </div>

        <div class="rlx-watchmaking-info">
            <div class="info-text">
                <div class="inner-pad">
                    <span class="mtitle">Arte Relojoeira<br>o verdadeiro<br>espírito Rolex</span>
                    <p style="margin-top:30px;">Pioneira no desenvolvimento de relógios de pulso, a Rolex projeta, desenvolve e produz todos os componentes essenciais dos seus relógios na própria empresa, desde a fundição das ligas de ouro e a usinagem, passando pelo trabalho artesanal e a montagem, até o acabamento do mecanismo, caixa, mostrador e pulseira.</p>
                    <p>A marca está na origem de numerosas inovações de grande importância, tendo registrado mais de 400 patentes ao longo de sua história. É na Suíça que os relógios Rolex ganham vida, graças ao know-how e ao empenho de mais de 6 mil funcionários que trabalham nas quatro unidades da marca, todos com experiência comprovada nas mais avançadas tecnologias relojoeiras.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="rlx-experience">
        <div class="exp-internal">

            <h2 class="title-big">Conheça nossa loja</h2>
            <hr class="text-sep">

            <div class="experience-image">
                <picture>
                    <source srcset="<?php echo base_url('img/rolex/experiencia-rolex.jpg') ?>" type="image/jpg">
                    <img src="<?php echo base_url('img/rolex/experiencia-rolex.png') ?>" />
                </picture>
            </div>

            <p>Nada substitui a experiência de conhecer, em primeira mão, os detalhes meticulosos, o equilíbrio das medidas, o conforto ou simplesmente a sensação de usar um relógio Rolex. Visite a Sara Joias e nós o apresentaremos os modelos e o aconselharemos sobre os aspectos técnicos dos relógios Rolex para ajudá-lo a escolher o relógio perfeito para você.</p>

            <a class="cta" href="/rolex/contact-us/">Contact us</a>

        </div>
    </section>


    <section id="rlx-explore">

        <div class="explore-internal">

            <h2 class="title-big">Descubra muito mais</h2>
            <hr class="text-sep">

            <div class="rlx-carousel-container">

                <div class="arw-holder">
                    <div class="arrow-left">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/seta_esquerda.jpg') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/seta_esquerda.png') ?>" />
                        </picture>
                    </div>
                    <div class="arrow-right">
                        <picture>
                            <source srcset="<?php echo base_url('img/rolex/seta_direita.jpg') ?>" type="image/jpg">
                            <img src="<?php echo base_url('img/rolex/seta_direita.png') ?>" />
                        </picture>
                    </div>
                </div>

                <div class="rlx-carousel">

                    <!-- Each carousel item -->
                    <div class="rlx-carousel-item">
                        <a href="/rolex/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke1.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke1.webp" />
                            </picture>
                            <br>
                            <span>Rolex na Montecristo</span>
                        </a>
                    </div>

                    <div class="rlx-carousel-item">
                        <a href="/rolex/collection/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke2.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke2.webp" />
                            </picture>
                            <br>
                            <span>Coleção Rolex</span>
                        </a>
                    </div>

                    <div class="rlx-carousel-item">
                        <a href="/rolex/festive-selection/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke3-2.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke3-2.webp" />
                            </picture>
                            <br>
                            <span>Seleção para festas</span>
                        </a>
                    </div>

                    <div class="rlx-carousel-item">
                        <a href="/rolex/our-history/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke4.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke4.webp" />
                            </picture>
                            <br>
                            <span>Nossa história</span>
                        </a>
                    </div>

                    <div class="rlx-carousel-item">
                        <a href="/rolex/our-showroom/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke5.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke5.webp" />
                            </picture>
                            <br>
                            <span>Our Showroom</span>
                        </a>
                    </div>

                    <div class="rlx-carousel-item">
                        <a href="/rolex/contact-us/">
                            <picture>
                                <source srcset="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke6.jpg" type="image/jpg">
                                <img src="https://www.listerhorsfall.co.uk/wp-content/themes/listerhorsfall-2018/img/rolex/ke6.webp" />
                            </picture>
                            <br>
                            <span>Contato</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

</div><!-- End wrapper -->

<div class="clear"></div>

<!-- End content -->

<?php
require_once 'footer.php';
