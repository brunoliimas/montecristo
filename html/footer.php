<!-- footer start here -->
<?php if (!isset($hidemapasite)) : ?>
    <button id="icon_cookie" onclick="openCookiePopup()">
            <img src="<?php echo base_url('img/icons/lock.svg') ?>" style="width: 50px; height: 50px; position: fixed; left: 20px; bottom: 20px; z-index: 999;" alt="lock">
        </button>
    <div class="mapa-site" id="_btn_mapa_site">
        <a href="#_btn_mapa_site" class="btn btn-default" onclick="javascript: $('#_mapasite').toggle('fast')">Mapa
            do site</a>

        <div class="container" id="_mapasite" style="display:none;">
            <div class="sitemap-block row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!--h5>Loja virtual</h5>
<ul>
<?php foreach ($header_sub_loja as $row) : ?>
<li><?php echo anchor('online/' . $row->slug, $row->nome, "title='{$row->nome}'"); ?></li>
<?php endforeach; ?>
</ul-->
                    <h5>Joias</h5>
                    <ul>
                        <?php foreach ($header_sub_joias as $row) : ?>
                            <li><?php echo anchor('joias/' . $row->slug, $row->nome, "title='{$row->nome}'"); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h5>Rel&oacute;gios</h5>
                    <ul>
                        <?php foreach ($header_sub_relogios as $row) : ?>
                            <li><?php echo anchor('relogios/' . $row->slug, $row->nome, "title='{$row->nome}'"); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h5>Acess&oacute;rios</h5>
                    <ul>
                        <?php foreach ($header_sub_acessorios as $row) : ?>
                            <li><?php echo anchor('acessorios/' . $row->slug, $row->nome, "title='{$row->nome}'"); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h5>Cole&ccedil;&otilde;es</h5>
                    <ul>
                        <?php foreach ($header_sub_colecoes as $row) : ?>
                            <li><?php echo anchor($row->link, $row->titulo, "title='{$row->titulo}'"); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h5>Universo</h5>
                    <ul>
                        <li><a href="<?php echo site_url('timeline') ?>" title="Nossa história">Nossa história</a></li>
                        <li><a href="<?php echo site_url('blog') ?>" title="Ações">Ações</a></li>
                    </ul>
                    <!-- <h5>Na M&iacute;dia</h5>
<ul>
<?php foreach (get_midiacategoria() as $row) : ?>
<li><?php echo anchor('na-midia/' . $row->slug, $row->nome, "title='{$row->nome}'"); ?></li>
<?php endforeach; ?>
</ul> -->
                    <h5>Cuidados com sua Joia</h5>
                    <ul>
                        <!--li><a href="<?php echo site_url('cuidados') ?>" title="Dicas e Cuidados com suas Joias">Dicas e cuidados com suas joias</a></li-->
                        <li><a href="<?php echo site_url('cuidados') ?>" title="Limpeza e Armazenamento">Limpeza e
                                armazenamento</a></li>
                    </ul>
                    <h5>Reformas</h5>
                    <ul>
                        <li><a href="<?php echo site_url('reforma') ?>" title="Reformamos sua Joia">Reformamos sua
                                joia</a></li>
                    </ul>
                    <h5>Políticas da Montecristo</h5>
                    <ul>
                        <li><a href="<?php echo site_url('garantias') ?>" title="Garantia Montecristo">Garantia
                                Montecristo</a></li>
                        <li><a href="<?php echo site_url('troca-e-devolucao') ?>" title="Trocas e devoluções">Trocas e
                                devoluções</a></li>
                        <li><a href="<?php echo site_url('frete-e-prazo-entrega') ?>" title="Fretes e prazos de entrega">Fretes e prazos de entrega</a></li>
                        <li><a href="<?php echo site_url('politica-privacidade') ?>" title="Política de privacidade">Política de privacidade</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h5>Lojas Montecristo</h5>
                    <ul>
                        <li><a href="<?php echo site_url('lojas') ?>#Shopping-Iguatemi-SP" title="Shopping Iguatemi SP">Shopping Iguatemi SP</a></li>
                        <li><a href="<?php echo site_url('lojas') ?>#Shopping-JK-Iguatemi" title="Shopping JK Iguatemi">Shopping JK Iguatemi</a></li>
                        <li><a href="<?php echo site_url('lojas') ?>#Espao-Rolex-Montecristo" title="Espaço Rolex Montecristo">Espaço Rolex Montecristo</a></li>
                    </ul>
                    <h5>Contato</h5>
                    <ul class="lowercase">
                        <li><a href="<?php echo site_url('contato') ?>" target="_blank">contato@montecristo.com.br</a>
                        </li>
                        <li><a href="tel:11 3032 8905" title="11 3032 8905">11 3032 8905</a> Shopping Iguatemi SP</li>
                        <li><a href="tel:11 3152 6660" title="11 3152 6660">11 3152 6660</a> Shopping JK Iguatemi</li>
                        <li><a href="tel:11 3152 6660" title="11 3152 6660">11 3152 6660</a> Espaço Rolex Montecristo</li>
                    </ul>
                    <h5>Assessoria de Imprensa</h5>
                    <ul>
                        <li>Adriana Chizzotti</li>
                        <li class="lowercase">email: <a href="mailto:adriana@ajung.com.br" target="_blank" title="adriana@ajung.com.br">adriana@ajung.com.br</a></li>
                        <li>cel. <a href="tel:+55 11 99701 0297" title="+55 11 99701 0297">+55 11 99701 0297</a></li>
                    </ul>
                    <h5>Redes Sociais</h5>
                    <ul class="social-area">
                        <li>
                            <a href="<?php echo get_siteconfig('FACEBOOK') ?>" class="facebook" aria-label="Página do Facebook Joalheria Montecristo" rel="noopener nofollow" target="_blank"></a>
                        </li>
                        <li>
                            <a href="<?php echo get_siteconfig('INSTAGRAM') ?>" class="instagram" aria-label="Página do Instagram Joalheria Montecristo" rel="noopener nofollow" target="_blank"></a>
                        </li>
                        <li>
                            <a href="<?php echo get_siteconfig('PINTEREST') ?>" class="pinterest" aria-label="Página do Pinterest Joalheria Montecristo" rel="noopener nofollow" target="_blank"></a>
                        </li>
                    </ul>
                    <h5>Meus Favoritos</h5>
                    <ul>
                        <li><a href="<?php echo site_url('favoritos') ?>" title="Itens Selecionados">Itens selecionados
                                <!--img src="<?php echo base_url('img/crown.png') ?>" alt=""-->
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
if (!isset($rolex)) :
?>


    <div class="d_whatsapp">
        <a href="https://wa.me/5511964175881" onclick="gtag_report_conversion('https://wa.me/5511964175881'),return true" title="Whatsapp" target="_blank">
            <picture>
                <source srcset="<?php echo base_url('/img/whatsapp.webp') ?>">
                <img src="https://montecristo.com.br/img/whatsapp.png" title="Contate-nos pelo Whatsapp!" alt="Contate a Montecristo pelo Whatsapp" width="120" height="120" loading="lazy">
            </picture>
        </a>
    </div>
<?php endif; ?>
<footer>
    <div class="footer-container">
        <?php
        require_once 'newsletter.php';
        ?>
        <ul class="footerNav cf list-inline">
            <li class="item-1"><a href="<?php echo site_url('cuidados') ?>" title="Cuidados com sua Joia">Cuidados com
                    sua Joia</a></li>
            <li class="item-2"><a href="<?php echo site_url('reforma') ?>" title="Reformamos sua Joia">Reformamos sua
                    Joia</a></li>
            <li class="item-3"><a href="<?php echo site_url('garantias') ?>" title="Garantias">Garantia</a></li>
            <li class="item-4"><a href="<?php echo site_url('troca-e-devolucao') ?>" title="Trocas e Devoluções">Trocas
                    e devoluções</a></li>
            <li class="item-5"><a href="<?php echo site_url('frete-e-prazo-entrega') ?>" title="Fretes e prazos de entrega">Fretes e prazos de entrega</a></li>
            <li class="item-6"><a href="<?php echo site_url('politica-privacidade') ?>" title="Política de privacidade">Política de privacidade</a></li>
            <li class="item-7"><a href="<?php echo site_url('lojas') ?>" title="Lojas Montecristo">Lojas</a></li>
            <li class="item-8"><a href="<?php echo site_url('contato') ?>" title="Contato">Contato</a></li>
        </ul>
        <p class="disclaimer"><small>Aviso: Todos os preços e condições deste site são válidos apenas para compras no
                site e não se aplicam às Lojas Físicas.</small></p>
        <p class="copyright">
            <small>Copyright© <?php echo date('Y') ?> Montecristo Joalheria.</small>
        </p>
        <p class="maker">
            <small>Site desenvolvido por: <a href="https://www.ajung.com.br">A Jung Soluções Corporativas</a>
            </small>
        </p>
    </div>
</footer>
<?php
// require_once 'cookies-modal.php';
// require_once 'bonus-modal.php';
?>
</section>

<?php if (
    $_SERVER['SERVER_NAME'] == 'localhost'
    || $_SERVER['SERVER_NAME'] == 'assis'
    || $_SERVER['SERVER_NAME'] == 'montecristo.com.br'
    || $_SERVER['SERVER_NAME'] == 'www.montecristo.com.br'
) : ?>
    <script>
        <?php print $_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'assis' ? "/*" : ''; ?>

        //     (function(i, s, o, g, r, a, m) {
        //         i['GoogleAnalyticsObject'] = r;
        //         i[r] = i[r] || function() {
        //             (i[r].q = i[r].q || []).push(arguments)
        //         }, i[r].l = 1 * new Date();
        //         a = s.createElement(o),
        //             m = s.getElementsByTagName(o)[0];
        //         a.async = 1;
        //         a.src = g;
        //         m.parentNode.insertBefore(a, m)
        //     })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        // ga('create', 'UA-57103873-1', 'auto');
        // ga('send', 'pageview');

        <?php if (isset($ga_ecommerce)) : ?>
            <?php print $ga_ecommerce; ?>
        <?php endif; ?>

            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '230649733973122');
        fbq('track', "PageView");

        <?php if (isset($fbq_track)) : ?>
            <?php print $fbq_track; ?>
        <?php endif; ?>

        <?php print $_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'assis' ? "*/" : ''; ?>
    </script>

    <noscript><img height="1" width="1" class="nodisplay" src="https://www.facebook.com/tr?id=230649733973122&ev=PageView&noscript=1" /></noscript>
<?php endif; ?>

<?php if ($this->session->flashdata('erro')) : ?>
    <script>
        alert('<?php echo $this->session->flashdata('erro') ?>');
    </script>
<?php endif; ?>

<?php echo @$popup; ?>

<!-- <script async src="<?php echo base_url('js/jquery.min.js?v=' . time()) ?>"></script> -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo base_url('js/jquery.form.min.js?v=' . time()) ?>"></script>
<script src="<?php echo base_url('js/jquery.validate.min.js?v=' . time()) ?>"></script>
<script src="<?php echo base_url('js/jquery.maskedinput.min.js?v=' . time()) ?>"></script>
<script src="<?php echo base_url('js/jquery.fancybox.pack.min.js?v=' . time()) ?>"></script>
<script src="<?php echo base_url('js/timeline.min.js?v=' . time()) ?>"></script>

<script src="<?php echo base_url('js/bootstrap.min.js?v=' . time()) ?>"></script>
<!-- <script src="<?php echo base_url('js/swiper.min.js?v=' . time()) ?>"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="<?php echo base_url('js/notify.min.js?v=' . time()) ?>"></script>
<script src="<?php echo base_url('js/site.min.js?v=' . time()) ?>"></script>


<?php
if (!empty($include_js)) :
    if (is_array($include_js)) :
        foreach ($include_js as $js)
            echo '<script src="' . $js . '"></script>';
    else :
        echo '<script src="' . $include_js . '"></script>';
    endif;
endif;
?>


<?php
if (!empty($script_rolex_bottom)) {
    // echo "<!-- digitalDataLayer to implement on the Rolex " . ucfirst($page_type) . " -->
    // <script pagespeed_no_defer='true'> 
    //         var digitalDataLayer = {
    //             page: {
    //                 pageType: '$page_type' //static value
    //             }
    //         }    
    //     </script>";

    echo $script_rolex_bottom;
}
?>

</body>

</html>