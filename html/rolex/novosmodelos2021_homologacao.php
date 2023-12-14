<?php
$adobelaunch = isset($adobelaunch_var) && $adobelaunch_var;
require_once APPPATH . 'views/html/header.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>
<div class="novos-modelos">
    <div class="novos-modelos-intro">
        <picture>
            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_cover.jpg') ?>" media="(min-width:992px)">
            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_cover_portrait.jpg') ?>" alt="Novos modelos 2021" class="novos-modelos-banner">
        </picture>
        <b>Relógios Rolex</b>
        <h1>Novos modelos 2021</h1>
        <p>
            <span>
                O Explorer de nova geração está disponível em versão Rolesor amarelo (combinação de aço Oystersteel e ouro amarelo 18 quilates).
                O Explorer II de nova geração em aço Oystersteel apresenta uma caixa e uma pulseira redesenhadas.
                O novo Datejust 36 é equipado com novos mostradores em cores metálicas vibrantes, enquanto as três novas modalidades do novo Cosmograph Daytona em ouro 18 quilates apresentam mostradores em meteorito.
                O novo Lady-Datejust é cravejado com 1.089 diamantes lapidação brilhante, revelando o esplendor dos diamantes.
            </span>
        </p>
    </div>
    <div class="container novos-modelos-body">
        <ul class="row">
            <li class="col-12">
                <a href="" title="EXPLORER">
                    <figure role="img">
                        <picture>
                            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_explorer.jpg') ?>" media="(min-width:992px)">
                            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_explorer_portrait.jpg') ?>" alt="EXPLORER" loading="lazy">
                        </picture>
                        <figcaption>
                            <b>EXPLORER</b>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="col-xs-6 col-sm-6">
                <a href="">
                    <figure role="img">
                        <picture>
                            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_explorer_2.jpg') ?>" media="(min-width:992px)">
                            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_explorer_2_portrait.jpg') ?>" alt="EXPLORER II" loading="lazy">
                        </picture>
                        <figcaption>
                            <b>EXPLORER II</b>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="col-xs-6 col-sm-6">
                <a href="" rel="" title="DATEJUST 36">
                    <figure role="img">
                        <picture>
                            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_datejust.jpg') ?>" media="(min-width:992px)">
                            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_datejust_portrait.jpg') ?>" alt="DATEJUST 36" loading="lazy">
                        </picture>
                        <figcaption>
                            <b>DATEJUST 36</b>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="col-xs-6 col-sm-6">
                <a href="">
                    <figure role="img">
                        <picture>
                            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_daytona.jpg') ?>" media="(min-width:992px)">
                            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_daytona_portrait.jpg') ?>" alt="" loading="lazy">
                        </picture>
                        <figcaption>
                            <b>COSMOGRAPH DAYTONA</b>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="col-xs-6 col-sm-6">
                <a href="">
                    <figure role="img">
                        <picture>
                            <source srcset="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_lady_datejust.jpg') ?>" media="(min-width:992px)">
                            <img src="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_lady_datejust_portrait.jpg') ?>" alt="" loading="lazy">
                        </picture>
                        <figcaption>
                            <b>LADY-DATEJUST</b>
                        </figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    </div>
    <div class="novos-modelos-outro">
        <picture>
            <source srcset="<?php echo site_url('img/rolex/novos2021/retrato/new_2021_watches_explorer_2_beauty_shot_portrait.jpg') ?>" media="(max-width:991px)">
            <img src="<?php echo site_url('img/rolex/novos2021/paisagem/new_2021_watches_explorer_2_beauty_shot.jpg') ?>" alt="Novos modelos Rolex 2021" loading="lazy">
        </picture>
    </div>
</div>
<!-- <script id="rlx-corner">
    (function(b, c, a, d, f, g, h, k, l) {
        var e = c.getElementsByTagName(a)[0];
        a = c.createElement(a);
        var m = function(a) {
            delete b[d];
            a(c.getElementById(f), [g, k, h, l])
        };
        b[d] = b[d] || m;
        a.async = !0;
        a.src = "https://corners.rolex.com/rlx-corner.js";
        e.parentNode.insertBefore(a, e)
    })(window, document, "script", "rlxCornerCallback", "rlx-corner", "cfc7ad7d527c12a9bbf73cb6b91b74f3", "https://montecristo.com.br/politica-privacidade", "pt-br", "new-watches-2021");
</script> -->

<?php require_once APPPATH . 'views/html/rolex/footer.php' ?>
<?php require_once APPPATH . 'views/html/footer.php' ?>