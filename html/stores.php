<?php require_once 'header.php' ?>

<style>
/* =Stores Page
--------------------------------------------------------------------------------------------------------*/
.stores-menu {
    border-bottom: solid 1px #ebebeb;
    background: #ebebeb;
    /* Old browsers */
    background: -moz-linear-gradient(top, #ebebeb 0%, #626365 1%, #626365 4%, #f4ebe4 32%, #ede3d9 57%, #626365 71%, #626365 75%, 626365 77%, #e7d9cc 99%, #e9d8ce 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ebebeb), color-stop(1%, #626365), color-stop(4%, #626365), color-stop(32%, #f4ebe4), color-stop(57%, #ede3d9), color-stop(71%, #626365), color-stop(75%, #626365), color-stop(77%, 626365), color-stop(99%, #e7d9cc), color-stop(100%, #e9d8ce));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #ebebeb 0%, #626365 1%, #626365 4%, #f4ebe4 32%, #ede3d9 57%, #626365 71%, #626365 75%, 626365 77%, #e7d9cc 99%, #e9d8ce 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #ebebeb 0%, #626365 1%, #626365 4%, #f4ebe4 32%, #ede3d9 57%, #626365 71%, #626365 75%, 626365 77%, #e7d9cc 99%, #e9d8ce 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #ebebeb 0%, #626365 1%, #626365 4%, #f4ebe4 32%, #ede3d9 57%, #626365 71%, #626365 75%, 626365 77%, #e7d9cc 99%, #e9d8ce 100%);
    /* IE10+ */
    background: linear-gradient(to bottom, #ebebeb 0%, #626365 1%, #626365 4%, #f4ebe4 32%, #ede3d9 57%, #626365 71%, #626365 75%, 626365 77%, #e7d9cc 99%, #e9d8ce 100%);
    /* W3C */

    list-style: none;
    display: table;
    width: 100%;
    margin-bottom: 0;
    margin-top: 0;
}

.stores-menu {
    display: flex;
    justify-content: space-evenly;
    padding: 20px 0;
}

.stores-menu li a {
    line-height: 38px;
    font-size: clamp(1.5rem, 5vw, 1.5rem);
    color: #626365;
    text-transform: uppercase;
    position: relative;
    white-space: nowrap;
}

.stores-menu li a:after {
    content: "";
    width: 29px;
    height: 18px;
    background: url(../img/logo-icon.png) 0 0 no-repeat;
    position: absolute;
    left: 50%;
    bottom: 100%;
    margin: 0 0 10px -15px;
    display: none;
}

.stores-menu li a:hover:after {
    display: block;
}

.stores-menu li a:hover {
    text-decoration: none;
}

.stores-page.columnOuter {
    padding: 40px 0;
}

.stores-page.columnOuter h4 {
    padding: 40px 0 20px;
    text-align: left;
}

.stores-page .left-part {
    text-align: center;
    width: 48.5%;
    float: left;
}

.stores-page .right-part {
    width: 48.5%;
    float: right;
    font-size: 16px;
    line-height: 30px;
    color: #626365;
}

.stores-page .right-part a {
    color: #626365;
}

.stores-page .right-part a em {
    text-decoration: none;
    font-style: normal;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid #ccc;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.stores-page .right-part p,
.stores-page .right-part address {
    padding: 0 0 30px;
}

.stores-page .right-part p span,
.stores-page .right-part address span {
    display: block;
}

.stores-page .left-part iframe {
    width: 100%;
}




@media screen and (max-width:998px) {

    .stores-page .right-part,
    .stores-page .left-part {
        float: none;
        width: 100%;
    }
}

/* =End Stores Page
--------------------------------------------------------------------------------------------------------*/
</style>

<script>
function loading_maps() {
    setTimeout(() => {
        var a = document.getElementsByTagName("pagespeed_iframe");
        if (0 < a.length) {
            for (var a = a[0], f = document.createElement("iframe"), d = 0, e = a.attributes, g = e
                    .length; d < g; ++d) f.setAttribute(e[d].name, e[d].value);
            a.parentNode.replaceChild(f, a)
        }
    }, 1000);
}
</script>

<ul class="stores-menu cf">
    <li><a href="#Shopping-JK-Iguatemi" title="Shopping JK Iguatemi" id="link_2" data-id="2"
            data-cms_id="<?php echo $jk->id ?>">Shopping JK Iguatemi</a></li>
    <li><a href="#Espao-Rolex-Montecristo" title="Espaço Rolex Montecristo" id="link_3" data-id="3"
            data-cms_id="<?php echo $analiafranco->id ?>">Espaço Rolex Montecristo</a></li>
    <li><a href="#Shopping-Iguatemi-SP" title="Shopping Iguatemi Campinas" id="link_1" data-id="1"
            data-cms_id="<?php echo $iguatemi->id ?>">Shopping Iguatemi Campinas</a></li>
</ul>

<?php if ($iguatemi->img1 != '') : ?>
<picture>
    <source srcset="<?php echo site_url('admin/upload/pagina/' . $iguatemi->img1) ?>" type="image/jpg">
    <img src="<?php echo image_compatibility(site_url('admin/upload/pagina/' . $iguatemi->img1), 'jpg') ?>"
        alt="<?php echo $iguatemi->titulo ?>" class="fullWidth js-store js-store-1-banner" style="max-width:100%;" />
</picture>

<?php endif; ?>

<?php if ($jk->img1 != '') : ?>
<picture>
    <source srcset="<?php echo site_url('admin/upload/pagina/' . $jk->img1) ?>" type="image/jpg">
    <img src="<?php echo image_compatibility(site_url('admin/upload/pagina/' . $jk->img1), 'jpg') ?>"
        alt="<?php echo $jk->titulo ?>" class="fullWidth js-store js-store-2-banner"
        style="display:none; max-width:100%;" />
</picture>
<?php endif; ?>

<?php if ($analiafranco->img1 != '') : ?>
<picture>
    <source srcset="<?php echo site_url('admin/upload/pagina/' . $analiafranco->img1) ?>" type="image/jpg">
    <img src="<?php echo image_compatibility(site_url('admin/upload/pagina/' . $analiafranco->img1), 'jpg') ?>"
        alt="<?php echo $analiafranco->titulo ?>" class="fullWidth js-store js-store-3-banner"
        style="display:none; max-width:100%;" />
</picture>
<?php endif; ?>

<!-- container start here -->
<section class="container">

    <div class="columnOuter stores-page cf js-store js-store-1-html">
        <?php echo $iguatemi->conteudo ?>
    </div>

    <div class="columnOuter stores-page cf js-store js-store-2-html" style="display:none">
        <?php echo $jk->conteudo ?>
    </div>

    <div class="columnOuter stores-page cf js-store js-store-3-html" style="display:none">
        <?php echo $analiafranco->conteudo ?>
    </div>
</section>


<!-- Google Code for Localiza&ccedil;&atilde;o de Loja Conversion Page -->
<script>
/* <![CDATA[ */
var google_conversion_id = 867541032;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "fIvvCMfmnnEQqMDWnQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
            src="//www.googleadservices.com/pagead/conversion/867541032/?label=fIvvCMfmnnEQqMDWnQM&amp;guid=ON&amp;script=0" />
    </div>
</noscript>

<!-- cContainer end here -->
<?php require_once 'footer.php' ?>


<script>
$(document).ready(function() {
    $('.stores-menu a').bind('click', function() {
        load_loja($(this).data('id'), $(this).data('cms_id'));
    });

    if (document.URL.indexOf('#Shopping-Iguatemi-SP') > -1) {
        $('#link_1').trigger('click');
        loading_maps();
    } else if (document.URL.indexOf('#Shopping-JK-Iguatemi') > -1) {
        $('#link_2').trigger('click');
        loading_maps();
    } else if (document.URL.indexOf('#Shopping-Analia-Franco') > -1 || document.URL.indexOf(
            '#Espao-Rolex-Montecristo')) {
        $('#link_3').trigger('click');
        loading_maps();
    }

    function load_loja(id, cms_id) {
        $('.js-store').hide();
        // $('.js-store-'+id+'-html').html('');
        $('.js-store-' + id + '-banner').fadeIn(500);
        $('.js-store-' + id + '-html').fadeIn(1000, 'swing', function() {
            $('.js-store-' + id + '-html').load("<?php echo site_url('cms/load') ?>/" + cms_id);
            loading_maps()
        });
    }
});
</script>