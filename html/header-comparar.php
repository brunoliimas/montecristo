<?php
if ((!$this->input->cookie(SITEID)) && ($this->input->cookie(SITEID) == '0')) {
    $this->input->set_cookie(
        array(
            'name' => 'montecristoid', 'value' => $this->session->userdata('session_id'), 'expire' => (10 * 365 * 24 * 60 * 60)
            // ,'domain' => '.montecristo.com.br'
            , 'path' => '/'
            // ,'prefix' => 'montecristo_'
            // ,'secure' => TRUE
        )
    );
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?php isset($seo_title) ? print "{$seo_title} | " : '' ?>Joalheria Montecristo - Joias e Relógios</title>

    <meta property="og:url" content="<?php echo current_url() ?>" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="adfeb69497e4c04cbbc11ff2befc3540" />
    <meta name="robots" content="index, follow">

    <?php if (strpos($_SERVER['REQUEST_URI'], '/giftguide') > -1) : ?>
    <meta property="og:title" content="MONTECRISTO" />
    <meta name="description" content="GIFT GUIDE 2017." />
    <meta property="og:description" content="GIFT GUIDE 2017." />
    <link rel="image_src" type="image/jpeg" href="<?php echo site_url('img/catalogo-guiftguide.jpg') ?>" />
    <meta property="og:image" content="<?php echo site_url('img/catalogo-guiftguide.jpg') ?>" />
    <?php elseif (strpos($_SERVER['REQUEST_URI'], '/catalogo') > -1) : ?>
    <meta property="og:title" content="OUR EDITION" />
    <meta name="description" content="MONTECRISTO " />
    <meta property="og:description" content="MONTECRISTO" />
    <link rel="image_src" type="image/jpeg" href="<?php echo site_url('img/uor_edittion.jpg?a=54321') ?>" />
    <meta property="og:image" content="<?php echo site_url('img/uor_edittion.jpg?a=54321') ?>" />
    <?php else : ?>

    <?php if (@$image_src) : ?>
    <link rel="image_src" type="image/png" href="<?php echo $image_src ?>" />
    <meta property="og:image" content="<?php echo $image_src ?>" />
    <?php else : ?>
    <link rel="image_src" type="image/jpeg" href="<?php echo site_url('img/logo-share.jpg') ?>" />
    <meta property="og:image" content="<?php echo site_url('img/logo-share.jpg') ?>" />
    <?php endif; ?>

    <!-- -->

    <meta property="og:title" content="<?php isset($seo_title) ? print "{$seo_title} | " : '' ?> MONTECRISTO" />

    <?php if (@$seo_description) : ?>
    <meta name="description" content="<?php echo $seo_description ?>" />
    <meta property="og:description" content="<?php echo $seo_description ?>" />
    <?php else : ?>
    <meta name="description" content="<?php echo get_siteconfig('META_DESCRIPTION') ?>" />
    <meta property="og:description" content="<?php echo get_siteconfig('META_DESCRIPTION') ?>" />
    <?php endif; ?>

    <?php endif; ?>

    <meta name="keywords" content="<?php echo get_siteconfig('META_KEYWORDS') ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/site2.min.css') ?>?030820181835" />

    <script type="text/javascript">
    var banners = <?php echo json_encode(@$banners) ?>;
    var base_url = '<?php echo base_url() ?>';
    var site_url = '<?php echo site_url() ?>';
    </script>

    <script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('js/site.min.js?x=180620191739') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/site.js?x=180620191739') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/mustache.min.js') ?>"></script>

    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie.css') ?>">
	<![endif]-->
    <!--[if IE 9 ]>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie9.css') ?>">
	<![endif]-->

    <link rel="icon" href="<?php echo site_url('favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo site_url('favicon.ico') ?>" type="image/x-icon">
    <link rel=“canonical” href=“http://montecristo.com.br/$1” />

    <script async src='https://www.google.com/recaptcha/api.js'></script>
    <style>
    .corbranca {
        color: #FFF;
    }
    </style>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Montecristo Joalheria",
        "url": "https://montecristo.com.br",
        "image": "https://montecristo.com.br/img/logo.svg",
        "author": "A. Jung Soluções Corporativa LTDA."
    }
    </script>
</head>

<body class="<?php isset($body_css_class) ? print $body_css_class : '' ?>">

    <section class="wrapper">
        <!-- header start here -->
        <section id="header">
            <div class="logo-container">
                <div id="logo">
                    <h1 class="corbranca">
                        Joalheria Montecristo - Joias e Relógios
                        <a href="<?php echo site_url() ?>" title="Montecristo - Joias e Relógios">
                            <img src="<?php echo base_url('img/logo.svg') ?>" alt="Joalheria Montecristo - Joias e Relógios">
                        </a>
                    </h1>
                </div>
            </div>

            <div id="cobranding">
                <script>
                RLX = {
                    legalURL: "https://montecristo.com.br/politica-privacidade"
                }
                </script>
                <a href="<?php echo site_url('rolex') ?>">
                    <div id="rolex-retailer-clock"></div>
                    <script src="https://static.rolex.com/retailers/clock/retailercall.js"></script>
                    <script>
                    var rdp = new RolexRetailerClock();
                    var rdpConfig = {
                        dealerAPIKey: 'cfc7ad7d527c12a9bbf73cb6b91b74f3',
                        lang: 'pt_br',
                        colour: 'gold'
                    }
                    try {
                        rdp.getRetailerClock(rdpConfig);
                    } catch (err) {}
                    </script>
                </a>
            </div>

            <?php if ($_SERVER['SERVER_NAME'] != 'localhost') : ?>
            <!-- rolex start here -->
            <!--script src="https://binary.rolex.com/dealer/cobranding.js" type="text/javascript"></script>
			<script type="text/javascript" charset="utf-8">
				var rdp = new CoBranding(); 
				var rdpConfig = { 
					dealerAPIKey: "cfc7ad7d527c12a9bbf73cb6b91b74f3"
					,domain: "www.montecristo.com.br"
					,lang: "pt-br"
					,shortLang: "PT-BR"
					,width: "120"
					,height: "90"
					,colour: "black"
					,brand: "rolex"
					,nw: "0"
					,format: "h" 
				}
				try { 
					rdp.getCoBranding(rdpConfig,"plaque/validate_dealer.rlx"); 
				} 
				catch(err) {}
			</script-->
            <!-- rolex end here -->
            <?php endif; ?>

            <?php require_once 'ecommerce/header-sacola.php' ?>

            <?php $header_sub_loja = get_categorias('loja'); ?>
            <?php $header_sub_joias = get_categorias(1); ?>
            <?php $header_sub_relogios = get_categorias(2); ?>
            <?php $header_sub_canetas = get_categorias(23); ?>
            <?php $header_sub_acessorios = get_categorias(32); ?>
            <?php $header_sub_colecoes = get_colecoes() ?>

            <div class="mainNav-wrapper cf">
                <!-- main navigation start here -->
                <ul class="mainNav cf hidden-md">
                    <!--li data-banner_id="bannerprincipal193"><a href="<?php echo site_url('online') ?>" title="Loja virtual">Loja virtual</a>
                        <div class="subMenu">
                            <ul class="cf">
                                <?php foreach ($header_sub_loja as $row) : ?>
                                    <li data-banner_id="categoria-<?php echo $row->id ?>"><a href="<?php echo site_url('online/' . $row->slug) ?>" ><?php echo $row->nome; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li-->

                    <li data-banner_id="categoria-1"><a href="<?php echo site_url('joias') ?>" title="Joias">Joias</a>
                        <div class="subMenu">
                            <ul class="cf">
                                <?php foreach ($header_sub_joias as $row) : ?>
                                <li data-banner_id="categoria-<?php echo $row->id ?>"><a href="<?php echo site_url('joias/' . $row->slug) ?>"><?php echo $row->nome; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li data-banner_id="categoria-21"><a href="<?php echo site_url('relogios/rolex') ?>" title="rolex">Rolex</a>
                        <!--div class="subMenu">
							<ul class="cf">
								<?php foreach ($header_sub_joias as $row) : ?>
								<li data-banner_id="categoria-<?php echo $row->id ?>"><a href="<?php echo site_url('joias/' . $row->slug) ?>" ><?php echo $row->nome; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div-->
                    </li>
                    <li data-banner_id="categoria-2"><a href="<?php echo site_url('relogios') ?>" title="Rel&oacute;gios">Rel&oacute;gios</a>
                        <div class="subMenu">
                            <ul class="data10 cf">
                                <?php foreach ($header_sub_relogios as $row) : ?>
                                <?php if ($row->imagem_icone != '') : ?>
                                <li data-banner_id="categoria-<?php echo $row->id ?>">
                                    <?php echo anchor('relogios/' . $row->slug, img(base_url('admin/' . $row->imagem_icone) . '?x=25092014-2')); ?>
                                </li>
                                <?php else : ?>
                                <li data-banner_id="categoria-<?php echo $row->id ?>">
                                    <?php echo anchor('relogios/' . $row->slug, $row->nome); ?></li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li data-banner_id="categoria-32"><a href="<?php echo site_url('acessorios') ?>" title="Acess&oacute;rios">Acess&oacute;rios</a>
                        <div class="subMenu">
                            <ul class="cf">
                                <?php foreach ($header_sub_acessorios as $row) : ?>
                                <li data-banner_id="categoria-<?php echo $row->id ?>"><a href="<?php echo site_url('acessorios/' . $row->slug) ?>"><?php echo $row->nome; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo site_url('timelinecolecao') ?>" title="Cole&ccedil;&otilde;es">Cole&ccedil;&otilde;es</a>
                        <!--div class="subMenu">
							<ul class="cf">
								<?php /*foreach($header_sub_colecoes as $row): ?>
								<li data-banner_id="colecao-<?php echo $row->id ?>"><?php echo anchor('colecao/'.$row->slug, $row->nome, "title='{$row->nome}'") ;?></li>
								<?php endforeach;*/ ?>
							</ul>
						</div-->
                    </li>
                    <li class="nopen"><a href="<?php echo site_url('na-midia') ?>" title="Na M&iacute;dia">Na
                            M&iacute;dia</a></li>
                    <li class="nopen"><a href="#" title="Universo">Universo</a>
                        <div class="subMenu">
                            <ul class="cf">
                                <li><a href="<?php echo site_url('timeline') ?>" title="Nossa Hist&oacute;ria">Nossa
                                        Hist&oacute;ria</a></li>
                                <li><a href="<?php echo site_url('blog') ?>" title="Ações">Ações</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo site_url('catalogo') ?>" title="Cat&aacute;logo On-line">Cat&aacute;logo
                            ON-line</a></li>
                    <li><a href="<?php echo site_url('joalheria/SALE') ?>" title="SALE">SALE</a></li>
                </ul>
                <!-- main navigation end here -->

                <!-- Responsive navigation here -->
                <div class="rmenu">
                    <a href="#" class="menu"><img src="<?php echo base_url('img/menu.jpg') ?>" alt="menu"></a>

                    <!-- Search start here -->
                    <ul class="search-area cf">
                        <li><a href="<?php echo site_url('favoritos') ?>" class="crown" data-tooltip="">Crown</a></li>
                        <li><a href="#" class="favourite">Search</a>
                            <form action="<?php echo site_url('buscar') ?>" class="simpleForm">
                                <input type="text" placeholder="Busque itens pela palavra chave" name="q" />
                                <button type="submit">Buscar</button>
                            </form>
                        </li>
                    </ul>
                    <!-- Search end here -->

                    <hr class="rmenu-line" />
                    <div id="responsivemenu">
                        <!-- social media start here -->
                        <ul class="social-area cf">
                            <li><a href="<?php echo get_siteconfig('FACEBOOK'); ?>" class="facebook" data-tooltip="Facebook" target="_blank">Facebook</a></li>
                            <li><a href="<?php echo get_siteconfig('INSTAGRAM'); ?>" class="instagram" data-tooltip="Instagram" target="_blank">Instagram</a></li>
                            <li><a href="<?php echo get_siteconfig('PINTEREST'); ?>" class="pinterest" data-tooltip="Pinterest" target="_blank">Pinterest</a></li>
                            <li><a href="#" class="newsletter" data-tooltip="Newsletter">Newsletter</a>
                                <form action="<?php echo site_url('news/assinar') ?>" class="simpleForm formNews" id="formNews" method="post">
                                    <input type="hidden" name="identificador" value="Cadastro de Newsletter">
                                    <input type="text" placeholder="email" name="email" />
                                    <button type="submit">Assinar</button>
                                </form>
                            </li>
                            <li><a href="<?php echo site_url('contato') ?>" class="contao" data-tooltip="Contato">Contato</a></li>
                        </ul>
                        <!-- social media end here -->
                        <ul class="topmenu cf">
                            <li><a href="<?php echo site_url('joias') ?>" title="Joias">Joias</a>
                                <ul class="subMenuFooter" class="nodisplay">
                                    <?php foreach ($header_sub_joias as $row) : ?>
                                    <li><a href="<?php echo site_url('joias/' . $row->slug) ?>"><?php echo $row->nome; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('rolex') ?>" title="Rolex">Rolex</a>
                            </li>
                            <li><a href="<?php echo site_url('relogios') ?>" title="Rel&oacute;gios">Rel&oacute;gios</a>
                                <ul class="subMenuFooter" class="nodisplay">
                                    <?php foreach ($header_sub_relogios as $row) : ?>
                                    <li><a href="<?php echo site_url('relogios/' . $row->slug) ?>"><?php echo $row->nome; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('acessorios') ?>" title="Acess&oacute;rios">Acess&oacute;rios</a>
                            </li>
                            <li><a href="<?php echo site_url('timelinecolecao') ?>" title="Cole&ccedil;&otilde;es">Cole&ccedil;&otilde;es</a>
                                <ul class="subMenuFooter" class="nodisplay">
                                    <?php foreach ($header_sub_colecoes as $row) : ?>
                                    <li><?php echo anchor($row->link, $row->titulo, "title='{$row->titulo}'"); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('na-midia') ?>" title="Na M&iacute;dia">Na M&iacute;dia</a>
                            </li>
                            <li><a href="#" title="Universo">Universo</a>
                                <ul class="subMenuFooter" class="nodisplay">
                                    <li><a href="<?php echo site_url('timeline') ?>" title="Nossa Hist&oacute;ria">Nossa
                                            Hist&oacute;ria</a></li>
                                    <li><a href="<?php echo site_url('blog') ?>" title="Ações">Ações</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('catalogo') ?>" title="Cat&aacute;logo On-line">Cat&aacute;logo ON-line</a></li>
                            <li><a href="<?php echo site_url('colecao/SALE') ?>" title="SALE">SALE</a></li>
                            <li><img src="<?php echo base_url('img/logo-icon.png') ?>" alt=""></li>
                            <li><a href="#" title="Mapa do site" class="sitemap-btn-responsive">Mapa do site</a></li>
                        </ul>

                        <!-- footer navigation end here -->
                    </div>
                </div>
                <!-- Responsive navigation end here -->

                <!-- social media start here -->
                <ul class="social-area cf hidden-md">
                    <li><a href="<?php echo get_siteconfig('FACEBOOK') ?>" class="facebook" data-tooltip="Facebook" target="_blank">Facebook</a></li>
                    <li><a href="<?php echo get_siteconfig('INSTAGRAM') ?>" class="instagram" data-tooltip="Instagram" target="_blank">Instagram</a></li>
                    <li><a href="<?php echo get_siteconfig('PINTEREST') ?>" class="pinterest" data-tooltip="Pinterest" target="_blank">Pinterest</a></li>
                    <li><a href="#" class="newsletter" data-tooltip="Newsletter">Newsletter</a>
                        <form action="<?php echo site_url('news/assinar') ?>" class="simpleForm formNews" method="post">
                            <input type="hidden" name="identificador" value="Cadastro de Newsletter">
                            <input type="text" placeholder="email" name="email" />
                            <button type="submit">Assinar</button>
                        </form>
                    </li>
                    <li><a href="<?php echo site_url('contato') ?>" class="contao" data-tooltip="Contato">Contato</a>
                    </li>
                </ul>
                <!-- social media end here -->

                <!-- Search start here -->
                <ul class="search-area cf hidden-md">
                    <li><a href="<?php echo site_url('favoritos') ?>" class="crown" data-tooltip="Favoritos">Crown</a>
                    </li>
                    <li><a href="#" class="favourite">Search</a>
                        <form action="<?php echo site_url('buscar') ?>" class="simpleForm">
                            <input type="text" placeholder="Busque itens pela palavra chave" name="q" />
                            <button type="submit">Buscar</button>
                        </form>
                    </li>
                </ul>
                <!-- Search end here -->
            </div>
        </section>