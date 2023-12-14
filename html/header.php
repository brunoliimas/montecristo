<?php
if ((!$this->input->cookie(SITEID)) && ($this->input->cookie(SITEID) == '0')) {
    $this->input->set_cookie(
        array(
            'name' => SITEID, 'value' => $this->session->userdata('session_id'), 'expire' => (10 * 365 * 24 * 60 * 60), 'path' => '/'
        )
    );
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php if (isset($item->nome)) { ?>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "name": "<?php echo $item->nome ?>",
                "brand": {
                    "@type": "Brand",
                    "name": "Montecristo"
                },
                "description": "<?php echo $seo_description ?>",
                "image": "<?php echo base_url('admin/upload/item/' . $item->imagem); ?>",
                "url": "<?php echo current_url() ?>",
                "offers": {
                    "@type": "Offer",
                    "availability": "https://schema.org/InStock",
                    "priceCurrency": "BRL",
                    "price": "<?php echo $this->cart->format_number($item->preco) ?>"
                }
            }
        </script>

    <?php } ?>

    <title>
        <?php

        if (isset($seo_title)) {
            if (isset($item->referencia)) {
                print "$seo_title - $item->referencia - ";
            } else {
                print "$seo_title | ";
            }
        } elseif (isset($subcategoria->nome)) {
            print "$subcategoria->nome - ";
        } elseif (isset($colecao->nome)) {
            print "$colecao->nome - ";
        }
        print "Joalheria Montecristo ";
        if (!isset($seo_title) && !isset($colecao)) {
            print "| Joias e Relógios";
        }
        ?>
    </title>


    <meta property="og:url" content="<?php echo current_url() ?>" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="adfeb69497e4c04cbbc11ff2befc3540" />
    <meta name="robots" content="index, follow">

    <?php if (@$image_src) : ?>
        <link rel="image_src" type="image/png" href="<?php echo $image_src ?>" />
        <meta property="og:image" content="<?php echo $image_src ?>" />
    <?php else : ?>
        <link rel="image_src" type="image/jpeg" href="<?php echo site_url('img/logo-share.webp') ?>" />
        <meta property="og:image" content="<?php echo site_url('img/logo-share.webp') ?>" />
    <?php endif; ?>

    <meta property="og:title" content="<?php
                                        if (isset($seo_title)) {
                                            print "$seo_title - ";
                                        } elseif (isset($subcategoria->nome)) {
                                            print "$subcategoria->nome - ";
                                        }
                                        print "Joalheria Montecristo";
                                        if (!isset($seo_title)) {
                                            print "- Joias e Relógios";
                                        } ?>" />

    <?php if (@$seo_description) {
        $seo_description = preg_replace("/\r|\n/", " ", $seo_description);
        $seo_description = strlen($seo_description) > 160 ? substr($seo_description, 0, 157) . '...' : $seo_description;
    ?>
        <meta name="description" content="<?php echo $seo_description ?>" />
        <meta property="og:description" content="<?php echo $seo_description ?>" />
    <?php } else { ?>
        <meta name="description" content="<?php echo get_siteconfig('META_DESCRIPTION') ?>" />
        <meta property="og:description" content="<?php echo get_siteconfig('META_DESCRIPTION') ?>" />
    <?php } ?>

    <meta name="keywords" content="<?php echo get_siteconfig('META_KEYWORDS') ?>" />

    <?php
    if (!empty($include_css)) :
        if (is_array($include_css)) :
            foreach ($include_css as $css) echo '<link rel="stylesheet" type="text/css" href="' . $css . '" />';
        else :
            echo '<link rel="stylesheet" type="text/css" href="' . $include_css . '" />';
        endif;
    endif;
    ?>

    <script>
        var banners = <?php echo json_encode(@$banners) ?>;
        var base_url = '<?php echo base_url() ?>';
        var site_url = '<?php echo site_url() ?>';
        var current_url = '<?php echo current_url() ?>';
        var pagina = '<?php echo isset($pagina) ? $pagina : '' ?>';
    </script>

    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie.css') ?>">
	<![endif]-->
    <!--[if IE 9 ]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie9.css') ?>">
	<![endif]-->
    <link rel="canonical" href="<?php echo site_url("") ?>">

    <link rel="icon" href="<?php echo site_url('favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo site_url('favicon.ico') ?>" type="image/x-icon">
    <script async defer src='https://www.google.com/recaptcha/api.js'></script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "<?php echo get_siteconfig('EMPRESA'); ?>",
            "url": "<?php echo base_url(); ?>",
            "image": "<?php echo base_url(); ?>/img/logo.svg",
            "author": "A. Jung Soluções Corporativa LTDA."
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Montecristo (BR)",
            "url": "https://montecristo.com.br/",
            "logo": "",
            "sameAs": [
                "https://www.facebook.com/montecristojoalheria/",
                "https://www.pinterest.ph/mjoalheria/",
                "https://www.instagram.com/montecristo.joalheria/"
            ]
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PRPQN7D');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.min.css?v=' . time()) ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/swiper.min.css?v=' . time()) ?>" />
</head>

<body class="<?php isset($body_css_class) ? print $body_css_class : '' ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRPQN7D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <?php if (!empty($preload)) echo $preload; ?>

    <section class="wrapper">
        
        <!-- header start here -->
        <section id="header" style="max-width: 1150px;position: relative;margin: 0 auto;">

            <div class="logo-container">
                <div id="logo">
                    <?php $tag_header = !isset($seo_title) ? "h1" : "div" ?>
                    <a aria-label="Logotipo da Montecristo" href="<?php echo site_url() ?>" title="<?php echo get_siteconfig('EMPRESA'); ?>">
                        <<?php echo $tag_header ?> class="corbranca">
                            <object data="<?php echo base_url('img/logo.svg') ?>" type="image/svg+xml" width="336" height="58" aria-label="Joalheria Montecristo - Joias e Relógios"></object>
                            <!-- <img src="<?php echo base_url('img/logo.svg') ?>" title="Logo Montecristo" alt="Joalheria Montecristo - Joias e Relógios" width="336" height="58" loading="lazy"> -->
                        </<?php echo $tag_header ?>>
                    </a>
                </div>
            </div>

            <div class="icones-contato header-sacola " style="top:48px;">
                <ul class="header-sacola-area">
                    <li>
                        <a aria-label="Buscar" href="#" class="btn-buscar" title="Buscar" rel="noopener">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Facebook" href="https://www.facebook.com/pages/Montecristo-Joalheria/378705558916382" title="Facebook" rel="noopener">
                            <i class="fa fa-facebook "></i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Instagram" href="http://instagram.com/montecristo.joalheria" class="btn-instagram" title="Instagram" rel="noopener">
                            <i class="fa fa-instagram "></i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Pinterest" aria-label="Buscar" href="http://www.pinterest.com/mjoalheria/" class="btn-pinterest" title="Pinterest" rel="noopener">
                            <i class="fa fa-pinterest "></i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Contato" href="<?php echo site_url("contato"); ?>" class="btn-contato" title="Contato" rel="noopener">
                            <i class="fa fa-phone "></i>
                        </a>
                    </li>

                    <!-- <li class="conta"><a href="#" class="header-sacola-item"><span class="screen-reader-text">Conta</span> <i class="fa fa-user"></i></a></li> -->

                    <!--<li><a href="--><?php //echo site_url('sacola') 
                                        ?>
                    <!--"><span class="screen-reader-text">Sacola</span> <i class="fa fa-shopping-bag"></i></a></li>-->

                    <!-- <li><a href="<?php echo base_url('favoritos'); ?>"><span class="screen-reader-text">Favoritos</span> <i class="fa fa-heart-o"></i></a></li> -->

                </ul>
            </div>

            <div id="cobranding" style="right: 51px;">
                <script>
                    RLX = {
                        legalURL: "https://montecristo.com.br/politica-privacidade"
                    };

                    if (location.href.toLowerCase().includes('/cartier')) {
                        document.querySelector('#cobranding').remove();
                    };
                </script>

                <a href="<?php echo site_url('rolex') ?>" style="width:150px;margin:0 auto;display:block;">
                    <div id="rolex-retailer-clock"></div>
                    <script src="https://static.rolex.com/retailers/clock/retailercall.js"></script>
                    <script>
                        var rdp = new RolexRetailerClock();
                        var rdpConfig = {
                            dealerAPIKey: 'cfc7ad7d527c12a9bbf73cb6b91b74f3',
                            lang: 'pt_br',
                            colour: 'gold'
                        };
                        try {
                            rdp.getRetailerClock(rdpConfig);
                        } catch (err) {}

                        
                    </script>
                </a>

            </div>


        </section>

        <?php

        $this->load->view('html/includes/menu-principal.php', array(
            'posicao_relativa' => isset($posicao_relativa)
        ));
        $this->load->view('html/includes/header/buscar.php');
        $this->load->view('html/rolex/cookies-rolex.php');
        ?>

        <?php
        // require_once 'ecommerce/header-sacola.php';
        $header_sub_loja = get_categorias('loja');
        $header_sub_joias = get_categorias(1);
        $header_sub_relogios = get_categorias(2);
        $header_sub_canetas = get_categorias(23);
        $header_sub_acessorios = get_categorias(32);
        $header_sub_colecoes = get_colecoes();
        ?>